<?
$subject_val = "Re: [OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 07:23:55 2009" -->
<!-- isoreceived="20090707112355" -->
<!-- sent="Tue, 07 Jul 2009 13:23:49 +0200" -->
<!-- isosent="20090707112349" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="4A533045.4030507_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d62c43c00907070305s437ac138q5a2924d840bc3e58_at_mail.gmail.com" -->
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
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 07:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9863.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9863.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9863.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Catalin David wrote:
<br>
<span class="quotelev1">&gt; Hello, all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just installed Valgrind (since this seems like a memory issue) and got
</span><br>
<span class="quotelev1">&gt; this interesting output (when running the test program):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==4616== Syscall param sched_setaffinity(mask) points to unaddressable byte(s)
</span><br>
<span class="quotelev1">&gt; ==4616==    at 0x43656BD: syscall (in /lib/tls/libc-2.3.2.so)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x4236A75: opal_paffinity_linux_plpa_init (plpa_runtime.c:37)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x423779B:
</span><br>
<span class="quotelev1">&gt; opal_paffinity_linux_plpa_have_topology_information (plpa_map.c:501)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x4235FEE: linux_module_init (paffinity_linux_module.c:119)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x447F114: opal_paffinity_base_select
</span><br>
<span class="quotelev1">&gt; (paffinity_base_select.c:64)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x444CD71: opal_init (opal_init.c:292)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x43CE7E6: orte_init (orte_init.c:76)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x4067A50: ompi_mpi_init (ompi_mpi_init.c:342)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x40A3444: PMPI_Init (pinit.c:80)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x804875C: main (test.cpp:17)
</span><br>
<span class="quotelev1">&gt; ==4616==  Address 0x0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ==4616==
</span><br>
<span class="quotelev1">&gt; ==4616== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4616==    at 0x4095772: ompi_comm_invalid (communicator.h:261)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x409581E: PMPI_Comm_size (pcomm_size.c:46)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x8048770: main (test.cpp:18)
</span><br>
<span class="quotelev1">&gt; ==4616==  Address 0x440000a0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; [denali:04616] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [denali:04616] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [denali:04616] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [denali:04616] Failing at address: 0x440000a0
</span><br>
<span class="quotelev1">&gt; [denali:04616] [ 0] /lib/tls/libc.so.6 [0x42b4de0]
</span><br>
<span class="quotelev1">&gt; [denali:04616] [ 1]
</span><br>
<span class="quotelev1">&gt; /users/cluster/cdavid/local/lib/libmpi.so.0(MPI_Comm_size+0x6f)
</span><br>
<span class="quotelev1">&gt; [0x409581f]
</span><br>
<span class="quotelev1">&gt; [denali:04616] [ 2] ./test(__gxx_personality_v0+0x12d) [0x8048771]
</span><br>
<span class="quotelev1">&gt; [denali:04616] [ 3] /lib/tls/libc.so.6(__libc_start_main+0xf8) [0x42a2768]
</span><br>
<span class="quotelev1">&gt; [denali:04616] [ 4] ./test(__gxx_personality_v0+0x3d) [0x8048681]
</span><br>
<span class="quotelev1">&gt; [denali:04616] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ==4616==
</span><br>
<span class="quotelev1">&gt; ==4616== Invalid read of size 4
</span><br>
<span class="quotelev1">&gt; ==4616==    at 0x4095782: ompi_comm_invalid (communicator.h:261)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x409581E: PMPI_Comm_size (pcomm_size.c:46)
</span><br>
<span class="quotelev1">&gt; ==4616==    by 0x8048770: main (test.cpp:18)
</span><br>
<span class="quotelev1">&gt; ==4616==  Address 0x440000a0 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that, now, I don't know where the issue comes from (is
</span><br>
<span class="quotelev1">&gt; it libc that is too old and incompatible with g++ 4.4/OpenMPI? is libc
</span><br>
<span class="quotelev1">&gt; broken?).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Looking at the code for ompi_comm_invalid:
<br>
<p>static inline int ompi_comm_invalid(ompi_communicator_t* comm)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ((NULL == comm) || (MPI_COMM_NULL == comm) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(OMPI_COMM_IS_FREED(comm)) || (OMPI_COMM_IS_INVALID(comm)) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return false;
<br>
}
<br>
<p><p>the interesting point is that (MPI_COMM_NULL == comm) evaluates to 
<br>
false, otherwise the following macros (where the invalid read occurs) 
<br>
would not be evaluated.
<br>
<p>The only idea that comes to my mind is that you are mixing MPI versions, 
<br>
but as you said your PATH is fine ?!
<br>
<p>Regards,
<br>
Dorian
<br>
<p><p><p><span class="quotelev1">&gt; Any help would be highly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Catalin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 6, 2009 at 3:36 PM, Catalin David&lt;catalindavid2003_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 6, 2009 at 3:26 PM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you also sure that you have the same version of Open-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on every machine of your cluster, and that it is the mpicxx of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version that is called when you run your program?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ask because you mentioned that there was an old version of Open-MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present... die you remove this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have just logged in a few other boxes and they all mount my home
</span><br>
<span class="quotelev2">&gt;&gt; folder. When running `echo $LD_LIBRARY_PATH` and other commands, I get
</span><br>
<span class="quotelev2">&gt;&gt; what I expect to get, but this might be because I have set these
</span><br>
<span class="quotelev2">&gt;&gt; variables in the .bashrc file. So, I tried compiling/running like this
</span><br>
<span class="quotelev2">&gt;&gt;  ~/local/bin/mpicxx [stuff] and ~/local/bin/mpirun -np 4 ray-trace,
</span><br>
<span class="quotelev2">&gt;&gt; but I get the same errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for the previous version, I don't have root access, therefore I was
</span><br>
<span class="quotelev2">&gt;&gt; not able to remove it. I was just trying to outrun it by setting the
</span><br>
<span class="quotelev2">&gt;&gt; $PATH variable to point first at my local installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Catalin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ******************************
</span><br>
<span class="quotelev2">&gt;&gt; Catalin David
</span><br>
<span class="quotelev2">&gt;&gt; B.Sc. Computer Science 2010
</span><br>
<span class="quotelev2">&gt;&gt; Jacobs University Bremen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49-(0)1577-49-38-667
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; College Ring 4, #343
</span><br>
<span class="quotelev2">&gt;&gt; Bremen, 28759
</span><br>
<span class="quotelev2">&gt;&gt; Germany
</span><br>
<span class="quotelev2">&gt;&gt; ******************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9863.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9861.php">Ashley Pittman: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9859.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9863.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9863.php">Catalin David: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
