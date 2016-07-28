<?
$subject_val = "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 10:53:50 2016" -->
<!-- isoreceived="20160127155350" -->
<!-- sent="Wed, 27 Jan 2016 15:53:19 +0000" -->
<!-- isosent="20160127155319" -->
<!-- name="Ramsey, James J CIV USARMY RDECOM ARL (US)" -->
<!-- email="james.j.ramsey14.civ_at_[hidden]" -->
<!-- subject="[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used" -->
<!-- id="B5E7491E7F72164997C336AA7C85A5FC74C300BA_at_ucolhpkt.easf.csd.disa.mil" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used<br>
<strong>From:</strong> Ramsey, James J CIV USARMY RDECOM ARL (US) (<em>james.j.ramsey14.civ_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-27 10:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28392.php">Ramsey, James J CIV USARMY RDECOM ARL (US): "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Previous message:</strong> <a href="28390.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] segmentation fault with java MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been trying to create a derived datatype for use in one-sided communication, and I find that attempting to modify the extents to account for potential alignment issues is making things *worse*, at least when one-sided communication is used. Modifying extents seems to work fine when using the datatype for two-sided communication, however. I also find that the problem seems to occur with the version of OpenMPI on my workstation (which, unfortunately, is a prior stable release, 1.8.5), but not with Cray's MPICH. Mainly, I'm trying to figure out if there's a problem with my code that OpenMPI is catching but Cray is not, or if the problem is at OpenMPI's end.

Here's some test code that triggers the problem for me when compiled with &quot;-DADJ_EXTENT&quot;:

TEST_CODE_START

#include &lt;iostream&gt;
#include &lt;cstdlib&gt;
#include &lt;vector&gt;
#include &lt;iostream&gt;

#include &lt;mpi.h&gt;

template&lt;typename T&gt;
void createWindowForPointer(MPI_Comm comm, const T * ptr, int size, MPI_Win &amp; win) {
  
  int disp_unit = sizeof(T);

  if (size &gt; 0) {
    MPI_Win_create(const_cast&lt;T*&gt;(ptr), size*disp_unit, disp_unit, MPI_INFO_NULL, comm, &amp;win);
  }
  else {
    MPI_Win_create(MPI_BOTTOM, 0, disp_unit, MPI_INFO_NULL, comm, &amp;win);
  }

}

template &lt;int N&gt;
struct Foo {
  int data[N];
};

template &lt;int N&gt;
void mkFooDType(MPI_Datatype &amp; dType) {
  int blockcount = N;
  MPI_Aint displ = 0;
  MPI_Datatype type = MPI_INT;
  MPI_Datatype dTypeTmp;

  MPI_Type_create_struct(1, &amp;blockcount, &amp;displ, &amp;type,
                         &amp;dTypeTmp);

#ifdef ADJ_EXTENT
#pragma message &quot;Using ADJ_EXTENT&quot;
  std::cout &lt;&lt; &quot;Adjusting extent&quot; &lt;&lt; std::endl;
  MPI_Type_create_resized(dTypeTmp, 0, sizeof(Foo&lt;N&gt;), &amp;dType);
#else
  MPI_Type_dup(dTypeTmp, &amp;dType);
#endif

  MPI_Type_commit(&amp;dType);
}

int main(int argc, char *argv[]) {
  MPI_Init(&amp;argc, &amp;argv);

  int rank;
  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);

  const int arraySize = 5, fooSize = 3;

  MPI_Win inPtrWin;
  Foo&lt;fooSize&gt; * inPtr;

  int inPtrSize = ((rank == 0) ? arraySize*sizeof(Foo&lt;fooSize&gt;) : 0);

  if (rank == 0) {
    MPI_Alloc_mem(arraySize*sizeof(Foo&lt;fooSize&gt;), MPI_INFO_NULL, &amp;inPtr);

    for (int i = 0; i &lt; arraySize; ++i) {
      for (int j = 0; j &lt; fooSize; ++j) {
        inPtr[i].data[j] = std::rand();
      }
    }
  }

  createWindowForPointer(MPI_COMM_WORLD, inPtr,
                         ((rank == 0) ? arraySize : 0),
                         inPtrWin);

  MPI_Datatype fooDType;
  mkFooDType&lt;fooSize&gt;(fooDType);

  Foo&lt;fooSize&gt; * outPtr;

  MPI_Win_fence((MPI_MODE_NOPUT | MPI_MODE_NOPRECEDE), inPtrWin);  
  if (rank != 0) {
    MPI_Alloc_mem(arraySize*sizeof(Foo&lt;fooSize&gt;), MPI_INFO_NULL, &amp;outPtr);

    MPI_Get(outPtr, arraySize, fooDType, 0, 0, arraySize, fooDType, inPtrWin);
  }
  MPI_Win_fence(MPI_MODE_NOSUCCEED, inPtrWin);

  if (rank != 0) {
    std::cout &lt;&lt; &quot;On rank &quot; &lt;&lt; rank &lt;&lt; &quot;, outPtr = [&quot;;
    for (int i = 0; i &lt; arraySize; ++i) {
      std::cout &lt;&lt; &quot; (&quot;;
      for (int j = 0; j &lt; fooSize; ++j) {
        std::cout &lt;&lt; &quot; &quot; &lt;&lt; outPtr[i].data[j];
      }
      std::cout &lt;&lt; &quot; )&quot;;
    }
    std::cout &lt;&lt; &quot; ]&quot; &lt;&lt; std::endl;
  }
  else {
    std::cout &lt;&lt; &quot;On rank &quot; &lt;&lt; rank &lt;&lt; &quot;,  inPtr = [&quot;;
    for (int i = 0; i &lt; arraySize; ++i) {
      std::cout &lt;&lt; &quot; (&quot;;
      for (int j = 0; j &lt; fooSize; ++j) {
        std::cout &lt;&lt; &quot; &quot; &lt;&lt; inPtr[i].data[j];
      }
      std::cout &lt;&lt; &quot; )&quot;;
    }
    std::cout &lt;&lt; &quot; ]&quot; &lt;&lt; std::endl;
  }

  MPI_Win_free(&amp;inPtrWin);

  if (rank == 0) {
    MPI_Free_mem(inPtr);
  }
  else {
    MPI_Free_mem(outPtr);
  }

  MPI_Finalize();
  return 0;
}

TEST_CODE_END

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28392.php">Ramsey, James J CIV USARMY RDECOM ARL (US): "[OMPI users] Using MPI_Type_create_resized is leading to segfault when one-sided communication is used (ungarbled)"</a>
<li><strong>Previous message:</strong> <a href="28390.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] segmentation fault with java MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
