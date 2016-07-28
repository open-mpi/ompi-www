#include <assert.h>
#include <sys/time.h>
#include <stdio.h>
#include <string.h>
#include <unistd.h>

#include <cuda.h>
#include <cuda_runtime.h>
#include <mpi.h>

// CUDA Runtime error messages
const char *cudaGetErrorEnum(cudaError_t error)
{
    switch (error)
    {
        case cudaSuccess:
        return "cudaSuccess";

        case cudaErrorMissingConfiguration:
        return "cudaErrorMissingConfiguration";

        case cudaErrorMemoryAllocation:
        return "cudaErrorMemoryAllocation";

        case cudaErrorInitializationError:
        return "cudaErrorInitializationError";

        case cudaErrorLaunchFailure:
        return "cudaErrorLaunchFailure";

        case cudaErrorPriorLaunchFailure:
        return "cudaErrorPriorLaunchFailure";

        case cudaErrorLaunchTimeout:
        return "cudaErrorLaunchTimeout";

        case cudaErrorLaunchOutOfResources:
        return "cudaErrorLaunchOutOfResources";

        case cudaErrorInvalidDeviceFunction:
        return "cudaErrorInvalidDeviceFunction";

        case cudaErrorInvalidConfiguration:
        return "cudaErrorInvalidConfiguration";

        case cudaErrorInvalidDevice:
        return "cudaErrorInvalidDevice";

        case cudaErrorInvalidValue:
        return "cudaErrorInvalidValue";

        case cudaErrorInvalidPitchValue:
        return "cudaErrorInvalidPitchValue";

        case cudaErrorInvalidSymbol:
        return "cudaErrorInvalidSymbol";

        case cudaErrorMapBufferObjectFailed:
        return "cudaErrorMapBufferObjectFailed";

        case cudaErrorUnmapBufferObjectFailed:
        return "cudaErrorUnmapBufferObjectFailed";

        case cudaErrorInvalidHostPointer:
        return "cudaErrorInvalidHostPointer";

        case cudaErrorInvalidDevicePointer:
        return "cudaErrorInvalidDevicePointer";

        case cudaErrorInvalidTexture:
        return "cudaErrorInvalidTexture";

        case cudaErrorInvalidTextureBinding:
        return "cudaErrorInvalidTextureBinding";

        case cudaErrorInvalidChannelDescriptor:
        return "cudaErrorInvalidChannelDescriptor";

        case cudaErrorInvalidMemcpyDirection:
        return "cudaErrorInvalidMemcpyDirection";

        case cudaErrorAddressOfConstant:
        return "cudaErrorAddressOfConstant";

        case cudaErrorTextureFetchFailed:
        return "cudaErrorTextureFetchFailed";

        case cudaErrorTextureNotBound:
        return "cudaErrorTextureNotBound";

        case cudaErrorSynchronizationError:
        return "cudaErrorSynchronizationError";

        case cudaErrorInvalidFilterSetting:
        return "cudaErrorInvalidFilterSetting";

        case cudaErrorInvalidNormSetting:
        return "cudaErrorInvalidNormSetting";

        case cudaErrorMixedDeviceExecution:
        return "cudaErrorMixedDeviceExecution";

        case cudaErrorCudartUnloading:
        return "cudaErrorCudartUnloading";

        case cudaErrorUnknown:
        return "cudaErrorUnknown";

        case cudaErrorNotYetImplemented:
        return "cudaErrorNotYetImplemented";

        case cudaErrorMemoryValueTooLarge:
        return "cudaErrorMemoryValueTooLarge";

        case cudaErrorInvalidResourceHandle:
        return "cudaErrorInvalidResourceHandle";

        case cudaErrorNotReady:
        return "cudaErrorNotReady";

        case cudaErrorInsufficientDriver:
        return "cudaErrorInsufficientDriver";

        case cudaErrorSetOnActiveProcess:
        return "cudaErrorSetOnActiveProcess";

        case cudaErrorInvalidSurface:
        return "cudaErrorInvalidSurface";

        case cudaErrorNoDevice:
        return "cudaErrorNoDevice";

        case cudaErrorECCUncorrectable:
        return "cudaErrorECCUncorrectable";

        case cudaErrorSharedObjectSymbolNotFound:
        return "cudaErrorSharedObjectSymbolNotFound";

        case cudaErrorSharedObjectInitFailed:
        return "cudaErrorSharedObjectInitFailed";

        case cudaErrorUnsupportedLimit:
        return "cudaErrorUnsupportedLimit";

        case cudaErrorDuplicateVariableName:
        return "cudaErrorDuplicateVariableName";

        case cudaErrorDuplicateTextureName:
        return "cudaErrorDuplicateTextureName";

        case cudaErrorDuplicateSurfaceName:
        return "cudaErrorDuplicateSurfaceName";

        case cudaErrorDevicesUnavailable:
        return "cudaErrorDevicesUnavailable";

        case cudaErrorInvalidKernelImage:
        return "cudaErrorInvalidKernelImage";

        case cudaErrorNoKernelImageForDevice:
        return "cudaErrorNoKernelImageForDevice";

        case cudaErrorIncompatibleDriverContext:
        return "cudaErrorIncompatibleDriverContext";

        case cudaErrorPeerAccessAlreadyEnabled:
        return "cudaErrorPeerAccessAlreadyEnabled";

        case cudaErrorPeerAccessNotEnabled:
        return "cudaErrorPeerAccessNotEnabled";

        case cudaErrorDeviceAlreadyInUse:
        return "cudaErrorDeviceAlreadyInUse";

        case cudaErrorProfilerDisabled:
        return "cudaErrorProfilerDisabled";

        case cudaErrorProfilerNotInitialized:
        return "cudaErrorProfilerNotInitialized";

        case cudaErrorProfilerAlreadyStarted:
        return "cudaErrorProfilerAlreadyStarted";

        case cudaErrorProfilerAlreadyStopped:
        return "cudaErrorProfilerAlreadyStopped";

#if __CUDA_API_VERSION >= 0x4000

        case cudaErrorAssert:
        return "cudaErrorAssert";

        case cudaErrorTooManyPeers:
        return "cudaErrorTooManyPeers";

        case cudaErrorHostMemoryAlreadyRegistered:
        return "cudaErrorHostMemoryAlreadyRegistered";

        case cudaErrorHostMemoryNotRegistered:
        return "cudaErrorHostMemoryNotRegistered";
#endif

        case cudaErrorStartupFailure:
        return "cudaErrorStartupFailure";

        case cudaErrorApiFailureBase:
        return "cudaErrorApiFailureBase";

        default:
        return "<unknown>";


    }

    return "<unknown>";
}


void check(cudaError_t result, char const *const func, const char *const file, int const line)
{
    if (result)
    {
        fprintf(stderr, "CUDA error at %s:%d code=%d(%s) \"%s\" \n",
            file, line, (unsigned)result, cudaGetErrorEnum(result), func);
        cudaDeviceReset();
        MPI_Finalize();
        exit(EXIT_FAILURE);
    }
}


#define checkCudaErrors(val)    check ( (val), #val, __FILE__, __LINE__ )


int BindGPU()
{
    int global_rank, nprocs;

    MPI_Comm_rank(MPI_COMM_WORLD, &global_rank);
    MPI_Comm_size(MPI_COMM_WORLD, &nprocs);

    int deviceCount;
    checkCudaErrors(cudaGetDeviceCount(&deviceCount));
    checkCudaErrors(cudaSetDevice(global_rank % deviceCount));

    return deviceCount;
}


int main(int argc, char *argv[])
{
    int max = 512 * 1024 * 1024;
    int step = 1024 * 1024;

    int argi;
    for (argi = 1; argi < argc; argi++)
    {
        if (!strcmp(argv[argi], "-max"))
        {
            max = atoi(argv[++argi]);
            continue;
        }

        if (!strcmp(argv[argi], "-step"))
        {
            step = atoi(argv[++argi]);
            continue;
        }        
    }

    // Initialize
    MPI_Init(&argc, &argv);
    assert(BindGPU());

    int my_rank_world;
    int world_size;
    MPI_Comm_size(MPI_COMM_WORLD, &world_size);
    MPI_Comm_rank(MPI_COMM_WORLD, &my_rank_world);

    int i;
    for (i = 0; i < max; i += step)
    {
        MPI_Request req;
        MPI_Status status;

        struct timeval start;
        struct timeval end;
        float *dev_ptr = NULL;
        size_t bytes = sizeof(float) * i;

        checkCudaErrors(cudaMalloc((void **)&dev_ptr, bytes));

        gettimeofday(&start, NULL);

        if (dev_ptr)
        {
            MPI_Ibcast(dev_ptr, i, MPI_FLOAT, 0, MPI_COMM_WORLD, &req);
            MPI_Wait(&req, &status);
        }

        gettimeofday(&end, NULL);

        if (dev_ptr)
            checkCudaErrors(cudaFree(dev_ptr));

        long seconds  = end.tv_sec  - start.tv_sec;
        long useconds = end.tv_usec - start.tv_usec;
        long mtime = ((seconds) * 1000 + useconds/1000.0) + 0.5;

        long total_time;
        MPI_Reduce(&mtime, &total_time, 1, MPI_LONG, MPI_SUM, 0, MPI_COMM_WORLD);

        if (my_rank_world == 0)
        {
            long avg_time = total_time / world_size;
            printf("Ibcast %zu bytes takes %ld ms\n", bytes, avg_time);
        }
    }

    // Finalize
    MPI_Finalize();

    return 0;
}
