#include "orte/mca/ras/base/ras_private.h"

orte_ras_node_t *newnode;
opal_list_t my_nodes;
opal_list_item_t *item;
int rc, i, num_nodes;
struct rm_node {
    char name[20];
    int num_slots;
} rm_nodes[100];

/* initialize the list where we will store our nodes */
OBJ_CONSTRUCT(&my_nodes, opal_list_t);

/* get the currently allocated nodes, if any */
if (ORTE_SUCCESS != (rc = orte_ras_base_node_query_alloc(&my_nodes, ORTE_PROC_MY_NAME->jobid))) {
    ORTE_ERROR_LOG(rc);
    /* do whatever you want for error conditions - this didn't work */
}
    
    
/* get your nodes from the RM API - in the code below, I've assumed they
 * are in an array called rm_nodes. I'm not entirely sure what format
 * you have the info stored in, so you'll need to substitute appropriately
 * in the assignments below
 */
    
    
for (i=0; i < num_nodes; i++)
{
    newnode = OBJ_NEW(orte_ras_node_t);
    newnode->node_name = strdup(rm_nodes[i].name);  /* the name of the node */
    newnode->node_state = ORTE_NODE_STATE_UP;  /* declare the node operational */
    
    /* we also need to know how many slots are available to us
     * on this node. In some cases, you can just hardcode the number.
     * In cases, where the system may tell you a number that you need
     * to stay within, then you can enter it here. Torque, for example,
     * simply duplicates node entries in your request, one for each slot.
     * So for torque, you would simply add up the number of times this node
     * shows up in your array and enter the number here - there are quick ways
     * to do this that you can see in orte/mca/ras/tm/ras_tm_module.c
     */
    newnode->node_slots = rm_nodes[i].num_slots;
    
    /* add the new node to the list of nodes */
    opal_list_append(&my_nodes, &newnode->super);
}

/* now assign these to us! */
if (ORTE_SUCCESS != (rc = orte_ras_base_allocate_nodes(ORTE_PROC_MY_NAME->jobid, &my_nodes))) {
    ORTE_ERROR_LOG(rc);
    /* do whatever you want for error conditions - this didn't work */
}

/* free the used memory */
while (NULL != (item = opal_list_remove_first(&my_nodes))) {
    OBJ_RELEASE(item);
}
OBJ_DESTRUCT(&my_nodes);
