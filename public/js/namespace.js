/**
 * Namespaces in JavaScript
 *
 * Usage:
 * var ns = window.namespace('root.module');
 *
 * ns.submodule = {
 *
 *     // Note: This is the public scope (accessible from the outside)
 *
 *     getModule: function() {
 *         // your logic
 *     }
 *
 * }
 *
 * Access sample:
 * var module = window.namespace('root.module.submodule').getModule();
 *
 * @param namespace
 * @returns {*}
 */
namespace = function(namespace) {

    'use strict';

    var parts = namespace.split('.'),
        parent = window,
        i;

    if (parts[0] === window) {
        parts = parts.slice(1);
    }

    for (i = 0; i < parts.length; i += 1) {

        // create a property if it doesn't exist
        if (typeof parent[parts[i]] === "undefined") {
            parent[parts[i]] = {};
        }

        parent = parent[parts[i]];

    }

    return parent;

};