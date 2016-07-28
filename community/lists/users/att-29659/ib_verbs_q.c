#include <string.h>
#include <infiniband/verbs.h>
struct ompi_device {
    struct ibv_device *ib_dev;
    struct ibv_exp_device_attr ib_exp_dev_attr;
    struct ibv_context *ib_dev_context;
};

#define btl_error(...) fprintf(stderr, __VA_ARGS__); fprintf(stderr, "\n");
#define BTL_ERROR(args) btl_error args

int main() {
    struct ibv_exp_device_attr exp_dev_attr;
    struct ibv_device **device_list;
    struct ibv_context *ib_dev_context;
    struct ompi_device *device;
    device=malloc(sizeof(struct ompi_device));

    device_list = ibv_get_device_list(NULL);
    if (!device_list)
        return -1;

    device->ib_dev=device_list[0];

    device->ib_dev_context = ibv_open_device(device->ib_dev);
    if (!device->ib_dev_context) {
        fprintf(stderr, "Error, failed to open the device '%s'\n",
                ibv_get_device_name(device->ib_dev));
        return -1;
    }

/** Begin code snippet from OpenMPI **/

    device->ib_exp_dev_attr.comp_mask = IBV_EXP_DEVICE_ATTR_RESERVED - 1;
    if(ibv_exp_query_device(device->ib_dev_context, &device->ib_exp_dev_attr)){
        BTL_ERROR(("error obtaining device attributes for %s errno says %s",
                    ibv_get_device_name(device->ib_dev), strerror(errno)));
        goto error;
    }

/** End code snippet from OpenMPI **/

    printf("hca_id: %s\n", ibv_get_device_name(device_list[0]));
    printf("\tfw ver: %s\n", device->ib_exp_dev_attr.fw_ver); 
    printf("\tnode guid: %02x%02x:%02x%02x:%02x%02x:%02x%02x\n",
	(device->ib_exp_dev_attr.node_guid & 0xFF),
	(( device->ib_exp_dev_attr.node_guid >> 8 ) & 0xFF),
	(( device->ib_exp_dev_attr.node_guid >> 16 ) & 0xFF),
	(( device->ib_exp_dev_attr.node_guid >> 24 ) & 0xFF),
	(( device->ib_exp_dev_attr.node_guid >> 32 ) & 0xFF),
	(( device->ib_exp_dev_attr.node_guid >> 40 ) & 0xFF),
	(( device->ib_exp_dev_attr.node_guid >> 48 ) & 0xFF),
	(( device->ib_exp_dev_attr.node_guid >> 56 ) & 0xFF)
   );

   return 0;

   error:
	return -1;
}

