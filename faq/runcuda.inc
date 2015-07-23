<?php

/////////////////////////////////////////////////////////////////////////

$q[] = "What kind of CUDA support exists in Open MPI?";

$anchor[] = "mpi-cuda-support";

$a[] = "Since Open MPI 1.7.0, there is support for sending and receiving CUDA device
memory directly.  Prior to this support, the programmer would first
have to stage the data in host memory prior to making the MPI calls.
Now, the Open MPI library will automatically detect that the pointer
being passed in is a CUDA device memory pointer and do the right
thing.   This is referred to as CUDA-aware support.

The use of device pointers is supported in all of the send and receive
APIs as well as the blocking collective APIs.  Neither the nonblocking
collective APIs nor the accumulate one-sided APIs are supported.

See <a href=\"?category=runcuda#mpi-apis-cuda\">this FAQ entry</a>
for more details on which APIs are supported.

Open MPI depends on various features of CUDA 4.0, so one needs to
have at least the CUDA 4.0 driver and toolkit.  The new features of interest
are the Unified Virtual Addressing (UVA) so that all pointers within a
program have unique addresses.  In addition, there is a new API that
allows one to determine if a pointer is a CUDA device pointer or host
memory pointer.  This API is used by the library to decide what needs
to be done with each buffer.  In addition, CUDA 4.1 also provides the
ability to register host memory with the CUDA driver which can improve
performance.  CUDA 4.1 also added CUDA IPC support for fast communication
between GPUs on the same node.

Note that derived datatypes, both contiguous and non-contiguous, are supported.
However, the non-contiguous datatypes currently have high overhead
because of the many calls to [cuMemcpy] to copy all the pieces of the
buffer into the intermediate buffer.

CUDA-aware support is only available in the sm, smcuda, tcp, and openib BTLs.
The smcuda BTL is an optimized version of the sm BTL that takes advantage
of the CUDA IPC support for fast GPU transfers.  Much of the other 
optimizations are built in to the openib BTL.

There is no CUDA-aware support in any of the MTLs.

*Open MPI 1.7.0, Open MPI 1.7.1, Open MPI 1.7.2*
<ul>
<li> Basic GPU direct support.
<li> Support for CUDA IPC between GPUs on a node, but would get error if
the GPUs did not support CUDA IPC.
</ul>

*Open MPI 1.7.3 New Features*
<ul>
<li> Support for asynchronous copies of larger GPU buffers over
the openib BTL.  
<li> Dynamically loads the libcuda.so library so you can configure
with CUDA-aware support, but run on machines that do not have CUDA installed.
</ul>

*Open MPI 1.7.4 New Features*
<ul>
<li> Removed synchronize point in CUDA IPC when running with CUDA 6.0 or later.
<li> Utilizes GPU Direct RDMA if it is available. Requires CUDA 6.0 or later.
<li> Dynamically enable CUDA IPC support between GPUs and back off to copy through
host memory if it is not available.
</ul>

*Open MPI 1.8.0 - 1.8.4 New Features*
<ul>
<li> Minor error handling fixes.
<li> Better cleanup of CUDA resources
</ul>

*Open MPI 1.8.5 New Features*
<ul>
<li> Improved on-node GPU to GPU transfers even when CUDA IPC is not supported between the two GPUs.
<li> Properly handle Unified Memory.  This is done by disabling CUDA IPC and GPU Direct RDMA optimizations on Unified Memory buffers.
<li> Support for blocking reduction MPI APIs.
</ul>

*For best results, it is recommended that you use the latest version of Open MPI which as of this writing was Open MPI 1.8.7.*

*Additional Information about CUDA-aware support*

Here are some relevant mca parameters to extract extra information if you
are having issues. For Open MPI 1.7.3 and later, you can see if the library
was built with CUDA-aware support.

<faqcode>
 > ./ompi_info --parsable -l 9 --all | grep mpi_built_with_cuda_support:value
 mca:mpi:base:param:mpi_built_with_cuda_support:value:true
</faqcode>

To get some extra information, there are some verbose flags.  The *opal_cuda_verbose*
has only one level of verbosity.  (Works on all versions)
<faqcode>
--mca opal_cuda_verbose 10
</faqcode>

This *mpi_common_cuda_verbose* flag provides additional information about CUDA-aware related activities.
This can be set to a variety of different values.  There is really no need to use
these unless you have strange problems. (Works on all versions)
<faqcode>
--mca mpi_common_cuda_verbose 10
--mca mpi_common_cuda_verbose 20
--mca mpi_common_cuda_verbose 100
</faqcode>

There are three new MCA parameters introduced with Open MPI 1.7.4 related to the use
of CUDA IPC.  By default, CUDA IPC is used where possible.  But the user can now
turn it off if they want.
<faqcode>
--mca btl_smcuda_use_cuda_ipc 0
</faqcode>

In addition, it is assumed that CUDA IPC is possible when running on the same GPU
and this is typically true.  However, there is the ability to turn it off.
<faqcode>
--mca btl_smcuda_use_cuda_ipc_same_gpu 0
</faqcode>

Lastly, to get some insight into whether CUDA IPC is being used, you can turn
on some verbosity that shows whether CUDA IPC gets enabled between two GPUs.
<faqcode>
--mca btl_smcuda_cuda_ipc_verbose 100
</faqcode>

*GPU Direct RDMA Information*

Open MPI 1.7.4 and later have added some support to take advantage of GPU Direct RDMA on Mellanox cards.
All the details about Mellanox hardware as well as software needed to get things to work can be found at
<a href=\"http://www.mellanox.com/page/products_dyn?product_family=116&mtag=gpudirect\"> Mellanox web site.</a> 
Note that to get GPU Direct RDMA support, you also need to configure your Open MPI library
with CUDA 6.0.

To see if you have GPU Direct RDMA compiled into your library, you can check like this:
<faqcode>
> ompi_info --all | grep btl_openib_have_cuda_gdr
   MCA btl: informational \"btl_openib_have_cuda_gdr\" (current value: \"true\", data source: default, level: 4 tuner/basic, type: bool)
</faqcode>

To see if your OFED stack has GPU Direct RDMA support, you can check like this.
<faqcode>
> ompi_info --all | grep btl_openib_have_driver_gdr
   MCA btl: informational \"btl_openib_have_driver_gdr\" (current value: \"true\", data source: default, level: 4 tuner/basic, type: bool)
</faqcode>

To run with GPU Direct RDMA support, you have to enable it as it is off by default.
<faqcode>
--mca btl_openib_want_cuda_gdr 1
</faqcode>

*GPU Direct RDMA Implementation Details*

With GPU Direct RDMA support selected, the eager protocol is unused.  This is done to avoid the
penalty of copying unexpected GPU messages into host memory.  Instead, a rendezvous protocol is used where
the sender and receiver both register their GPU buffers and make use of GPU Direct RDMA support to
transfer the data.  This is done for all messages that are less than 30,000 bytes in size.  For larger
messages, the openib BTL switches to using pipelined buffers as that has better performance at
larger messages.  So, by default, with GPU Direct RDMA enabled, the underlying protocol usage is like this:
<faqcode>
0      < message size < 30,000      GPU Direct RDMA
30,000 < message size < infinity    Asynchronous copies through host memory
</faqcode>

You can adjust the point where we switch to asynchronous copes with the *--mca btl_openib_cuda_rdma_limit* value.
For example, if you want to increase the switchover point to 100,000 bytes, then set it like this.
<faqcode>
--mca btl_openib_cuda_rdma_limit 100000
</faqcode>

By default, if we have GPU Direct RDMA, we use it for 1 byte messages on up to the *btl_openib_cuda_rdma_limit* value.
However, you could use the eager protocol for the smallest messages by setting *--mca btl_openib_cuda_eager_limit*
value.  _Note: The *btl_openib_cuda_eager_limit* value includes some overhead so you cannot just set it to the payload value.
It has to be set to the payload plus the extra upper layer extra bytes.  Currently, in Open MPI 1.7.4, this overhead is
44 bytes, so that has to be the minimum value.  In the table below we are just referring to the size of the payload._

This table tries to show how the various runtime parameters affect what protocols are used in a GPU Direct RDMA.
<p>
<center>
<table border=1 cellpadding=5>
<tr>
<th>Message Size Limits</th>
<th>Protocol</th>
</tr>

<tr>
<td>0 < message size < btl_openib_cuda_eager_limit (default=0)</td>
<td> eager protocol (not used by default)
</tr>

<tr>
<td>btl_openib_cuda_eager_limit (default=0) < message size < btl_openib_cuda_rdma_limit (default=30,000)</td>
<td> rendezvous protocol utilizing GPU Direct RDMA</td>
</tr>

<tr>
<td>btl_openib_cuda_rdma_limit (default=30,000) < message size < infinity</td>
<td> pipelined transfers of size 128K through host memory</td>
</tr>

</table>
</center>

*Performance Note*
The cost of registering the GPU memory with the Mellanox driver is expensive so it is
best to reuse the same GPU buffer for communication.

*NUMA Node Issues*
When running on a node that has multiple GPUs, you may want to select the GPU that is
closest to the process you are running on.  One way to do this is to make use of the
hwloc library.  Following is a code snippet that can be used in your application to 
select a GPU that is close.  It will determine which CPU it is running on and then
look for the closest GPU.  There could be multiple GPUs that are the same distance
away.  This is dependent on having hwloc somewhere on your system.

<faqcode>
/**
 * Test program to show the use of hwloc to select the GPU closest to the CPU
 * that the MPI program is running on.  Note that this works even without
 * any libpciacces or libpci support as it keys of the NVIDIA vendor ID.
 * There may be other ways to implement this but this is one way.
 * January 10, 2014
 */
#include &lt;assert.h&gt;
#include &lt;stdio.h&gt;
#include \"cuda.h\"
#include \"mpi.h\"
#include \"hwloc.h\"

#define ABORT_ON_ERROR(func)                          \
  { CUresult res;                                     \
    res = func;                                       \
    if (CUDA_SUCCESS != res) {                        \
        printf(\"%s returned error=%d\\n\", #func, res); \
        abort();                                      \
    }                                                 \
  }                             
static hwloc_topology_t topology = NULL;
static int gpuIndex = 0;
static hwloc_obj_t gpus[16] = {0};

/**
 * This function searches for all the GPUs that are hanging off a NUMA
 * node.  It walks through each of the PCI devices and looks for ones
 * with the NVIDIA vendor ID.  It then stores them into an array.
 * Note that there can be more than one GPU on the NUMA node.
 */

static void find_gpus(hwloc_topology_t topology, hwloc_obj_t parent, hwloc_obj_t child) {
    hwloc_obj_t pcidev;
    pcidev = hwloc_get_next_child(topology, parent, child);
    if (NULL == pcidev) {
        return;
    } else if (0 != pcidev->arity) {
        /* This device has children so need to look recursively at them */
        find_gpus(topology, pcidev, NULL);
        find_gpus(topology, parent, pcidev);
    } else {
        if (pcidev->attr->pcidev.vendor_id == 0x10de) {
            gpus[gpuIndex++] = pcidev;
        }
        find_gpus(topology, parent, pcidev);
    }
}
int main(int argc, char *argv[])
{
    int rank, retval, length;
    char procname[MPI_MAX_PROCESSOR_NAME+1];
    const unsigned long flags = HWLOC_TOPOLOGY_FLAG_IO_DEVICES | HWLOC_TOPOLOGY_FLAG_IO_BRIDGES;
    hwloc_cpuset_t newset;
    hwloc_obj_t node, bridge;
    char pciBusId[16];
    CUdevice dev;
    char devName[256];

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    if (MPI_SUCCESS != MPI_Get_processor_name(procname, &length)) {
        strcpy(procname, \"unknown\");
    }

    /* Now decide which GPU to pick.  This requires hwloc to work properly.
     * We first see which CPU we are bound to, then try and find a GPU nearby.
     */
    retval = hwloc_topology_init(&topology);
    assert(retval == 0);
    retval = hwloc_topology_set_flags(topology, flags);
    assert(retval == 0);
    retval = hwloc_topology_load(topology);
    assert(retval == 0);
    newset = hwloc_bitmap_alloc();
    retval = hwloc_get_last_cpu_location(topology, newset, 0);
    assert(retval == 0);

    /* Get the object that contains the cpuset */
    node = hwloc_get_first_largest_obj_inside_cpuset(topology, newset);

    /* Climb up from that object until we find the HWLOC_OBJ_NODE */
    while (node->type != HWLOC_OBJ_NODE) {
        node = node->parent;
    }

    /* Now look for the HWLOC_OBJ_BRIDGE.  All PCI busses hanging off the
     * node will have one of these */
    bridge = hwloc_get_next_child(topology, node, NULL);
    while (bridge->type != HWLOC_OBJ_BRIDGE) {
        bridge = hwloc_get_next_child(topology, node, bridge);
    }

    /* Now find all the GPUs on this NUMA node and put them into an array */
    find_gpus(topology, bridge, NULL);

    ABORT_ON_ERROR(cuInit(0));
    /* Now select the first GPU that we find */
    if (gpus[0] == 0) {
        printf(\"No GPU found\\n\");
        exit(1);
    } else {
        sprintf(pciBusId, \"%.2x:%.2x:%.2x.%x\", gpus[0]->attr->pcidev.domain, gpus[0]->attr->pcidev.bus,
        gpus[0]->attr->pcidev.dev, gpus[0]->attr->pcidev.func);
        ABORT_ON_ERROR(cuDeviceGetByPCIBusId(&dev, pciBusId));
        ABORT_ON_ERROR(cuDeviceGetName(devName, 256, dev));
        printf(\"rank=%d (%s): Selected GPU=%s, name=%s\\n\", rank, procname, pciBusId, devName);
    }

    MPI_Finalize();
    return 0;
}
</faqcode>


See <a href=\"?category=buildcuda\">this FAQ entry</a>
for detals on how to configure the CUDA support into the library.
";
/////////////////////////////////////////////////////////////////////////

$q[] = "Which MPI APIs work with CUDA-aware?";

$anchor[] = "mpi-apis-cuda";

$a[] = "

<p>
<center>
<table border=1 cellpadding=5>
<tr>
<th>MPI API</th>
<th>Support Added In Version</th>
</tr>

<tr>
<td>MPI_Send, MPI_Bsend, MPI_Ssend, MPI_Rsend, MPI_Isend, MPI_Ibsend,
 MPI_Issend, MPI_Irsend, MPI_Send_init, MPI_Bsend_init, MPI_Ssend_init,
 MPI_Rsend_init, MPI_Recv, MPI_Irecv, MPI_Recv_init, MPI_Sendrecv,
 MPI_Bcast, MPI_Gather, MPI_Gatherv, MPI_Allgather,
 MPI_Allgatherv, MPI_Alltoall, MPI_Alltoallv, MPI_Alltoallw, MPI_Scatter, MPI_Scatterv
</td>
<td>Open MPI 1.7.0</td>
</tr>

<td>MPI_Win_create, MPI_Put, MPI_Get</td>
<td>Open MPI 1.8.0</td>
</tr>

<td>MPI_Reduce, MPI_Allreduce, MPI_Scan, MPI_Exscan, MPI_Reduce_scatter,
    MPI_Reduce_scatter_block</td>
<td>Open MPI 1.8.5</td>
</tr>

</table>
</center>

";
/////////////////////////////////////////////////////////////////////////

$q[] = "Which MPI APIs do NOT work with CUDA-aware?";

$anchor[] = "mpi-apis-no-cuda";

$a[] = "

<p>
<table border=1 cellpadding=5>
<tr>
<th>MPI API</th>
<th>Expected Support</th>
</tr>

<tr>
<td>MPI_Accumulate, MPI_Rget, MPI_Rput, MPI_Get_Accumulate, MPI_Fetch_and_op,
    MPI_Compare_and_swap
</td>
<td>Future</td>
</tr>

<tr>
<td>MPI_Iallgather, MPI_Iallgatherv, MPI_Iallreduce, MPI_Ialltoall,
    MPI_Iialltoallv, MPI_Ialltoallw, MPI_Ibcast, MPI_Iexscan                     
</td>
<td>Future</td>
</tr>

</table>

";
/////////////////////////////////////////////////////////////////////////

$q[] = "Can I tell at compile time or runtime whether I have CUDA-aware support?";

$anchor[] = "mpi-cuda-aware-support";

$a[] = "
New with Open MPI v2.0.0 we have added a compile time check and a runtime check.
You can use whichever is the most convenient for your program.  To access them,
you need to include mpi-ext.h. Note that mpi-ext.h has been around for several
releases so you can just add it to your include list. The following program
shows an example of using the CUDA-aware macro and runtime check.

<faqcode>
/**                                                                                                        
 * Program that shows the use of CUDA-aware macro and runtime check.                                       
 * Requires Open MPI v2.0.0 or later.                                                                      
 */
#include &lt;stdio.h&gt;
#include \"cuda.h\"
#include \"mpi.h\"
#include \"mpi-ext.h\"  /* Needed for CUDA-aware check */

#if (OMPI_MAJOR_VERSION &lt 2)
#define CUDA_AWARE -1 /* unknown */
#else
#if (MPIX_CUDA_AWARE_SUPPORT == 1)
#define CUDA_AWARE 1
#else
#define CUDA_AWARE 0
#endif
#endif

int main(int argc, char *argv[])
{
#if OMPI_MAJOR_VERSION &gt= 2
    if (1 == MPIX_Query_cuda_support()) {
        printf(\"This Open MPI library has CUDA-aware support.\\n\");
    } else {
        printf(\"This Open MPI library does not have CUDA-aware support.\\n\");
    }
#endif
}

</faqcode>

";
