<?
$subject_val = "Re: [OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 06:06:01 2009" -->
<!-- isoreceived="20090707100601" -->
<!-- sent="Tue, 7 Jul 2009 11:05:37 +0100" -->
<!-- isosent="20090707100537" -->
<!-- name="Catalin David" -->
<!-- email="catalindavid2003_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="d62c43c00907070305s437ac138q5a2924d840bc3e58_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d62c43c00907060736n7e19ac6fo904b20d6c058b416_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault - Address not mapped<br>
<strong>From:</strong> Catalin David (<em>catalindavid2003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 06:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9860.php">Markus Blatt: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and	STL containers"</a>
<li><strong>Previous message:</strong> <a href="9858.php">Matthieu Brucher: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9862.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, all!
<br>
<p>Just installed Valgrind (since this seems like a memory issue) and got
<br>
this interesting output (when running the test program):
<br>
<p>==4616== Syscall param sched_setaffinity(mask) points to unaddressable byte(s)
<br>
==4616==    at 0x43656BD: syscall (in /lib/tls/libc-2.3.2.so)
<br>
==4616==    by 0x4236A75: opal_paffinity_linux_plpa_init (plpa_runtime.c:37)
<br>
==4616==    by 0x423779B:
<br>
opal_paffinity_linux_plpa_have_topology_information (plpa_map.c:501)
<br>
==4616==    by 0x4235FEE: linux_module_init (paffinity_linux_module.c:119)
<br>
==4616==    by 0x447F114: opal_paffinity_base_select
<br>
(paffinity_base_select.c:64)
<br>
==4616==    by 0x444CD71: opal_init (opal_init.c:292)
<br>
==4616==    by 0x43CE7E6: orte_init (orte_init.c:76)
<br>
==4616==    by 0x4067A50: ompi_mpi_init (ompi_mpi_init.c:342)
<br>
==4616==    by 0x40A3444: PMPI_Init (pinit.c:80)
<br>
==4616==    by 0x804875C: main (test.cpp:17)
<br>
==4616==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
<br>
==4616==
<br>
==4616== Invalid read of size 4
<br>
==4616==    at 0x4095772: ompi_comm_invalid (communicator.h:261)
<br>
==4616==    by 0x409581E: PMPI_Comm_size (pcomm_size.c:46)
<br>
==4616==    by 0x8048770: main (test.cpp:18)
<br>
==4616==  Address 0x440000a0 is not stack'd, malloc'd or (recently) free'd
<br>
[denali:04616] *** Process received signal ***
<br>
[denali:04616] Signal: Segmentation fault (11)
<br>
[denali:04616] Signal code: Address not mapped (1)
<br>
[denali:04616] Failing at address: 0x440000a0
<br>
[denali:04616] [ 0] /lib/tls/libc.so.6 [0x42b4de0]
<br>
[denali:04616] [ 1]
<br>
/users/cluster/cdavid/local/lib/libmpi.so.0(MPI_Comm_size+0x6f)
<br>
[0x409581f]
<br>
[denali:04616] [ 2] ./test(__gxx_personality_v0+0x12d) [0x8048771]
<br>
[denali:04616] [ 3] /lib/tls/libc.so.6(__libc_start_main+0xf8) [0x42a2768]
<br>
[denali:04616] [ 4] ./test(__gxx_personality_v0+0x3d) [0x8048681]
<br>
[denali:04616] *** End of error message ***
<br>
==4616==
<br>
==4616== Invalid read of size 4
<br>
==4616==    at 0x4095782: ompi_comm_invalid (communicator.h:261)
<br>
==4616==    by 0x409581E: PMPI_Comm_size (pcomm_size.c:46)
<br>
==4616==    by 0x8048770: main (test.cpp:18)
<br>
==4616==  Address 0x440000a0 is not stack'd, malloc'd or (recently) free'd
<br>
<p><p>The problem is that, now, I don't know where the issue comes from (is
<br>
it libc that is too old and incompatible with g++ 4.4/OpenMPI? is libc
<br>
broken?).
<br>
<p>Any help would be highly appreciated.
<br>
<p>Thanks,
<br>
Catalin
<br>
<p><p>On Mon, Jul 6, 2009 at 3:36 PM, Catalin David&lt;catalindavid2003_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jul 6, 2009 at 3:26 PM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; Are you also sure that you have the same version of Open-MPI
</span><br>
<span class="quotelev2">&gt;&gt; on every machine of your cluster, and that it is the mpicxx of this
</span><br>
<span class="quotelev2">&gt;&gt; version that is called when you run your program?
</span><br>
<span class="quotelev2">&gt;&gt; I ask because you mentioned that there was an old version of Open-MPI
</span><br>
<span class="quotelev2">&gt;&gt; present... die you remove this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just logged in a few other boxes and they all mount my home
</span><br>
<span class="quotelev1">&gt; folder. When running `echo $LD_LIBRARY_PATH` and other commands, I get
</span><br>
<span class="quotelev1">&gt; what I expect to get, but this might be because I have set these
</span><br>
<span class="quotelev1">&gt; variables in the .bashrc file. So, I tried compiling/running like this
</span><br>
<span class="quotelev1">&gt; &#160;~/local/bin/mpicxx [stuff] and ~/local/bin/mpirun -np 4 ray-trace,
</span><br>
<span class="quotelev1">&gt; but I get the same errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the previous version, I don't have root access, therefore I was
</span><br>
<span class="quotelev1">&gt; not able to remove it. I was just trying to outrun it by setting the
</span><br>
<span class="quotelev1">&gt; $PATH variable to point first at my local installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Catalin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ******************************
</span><br>
<span class="quotelev1">&gt; Catalin David
</span><br>
<span class="quotelev1">&gt; B.Sc. Computer Science 2010
</span><br>
<span class="quotelev1">&gt; Jacobs University Bremen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: +49-(0)1577-49-38-667
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; College Ring 4, #343
</span><br>
<span class="quotelev1">&gt; Bremen, 28759
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; ******************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
******************************
Catalin David
B.Sc. Computer Science 2010
Jacobs University Bremen
Phone: +49-(0)1577-49-38-667
College Ring 4, #343
Bremen, 28759
Germany
******************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9860.php">Markus Blatt: "Re: [OMPI users] MPI and C++ - now Send and Receive of Classes and	STL containers"</a>
<li><strong>Previous message:</strong> <a href="9858.php">Matthieu Brucher: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9840.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9862.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
