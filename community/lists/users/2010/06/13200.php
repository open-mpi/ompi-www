<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 08:42:06 2010" -->
<!-- isoreceived="20100602124206" -->
<!-- sent="Wed, 02 Jun 2010 14:42:50 +0200" -->
<!-- isosent="20100602124250" -->
<!-- name="guillaume ranquet" -->
<!-- email="guillaume.ranquet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager." -->
<!-- id="4C0651CA.3060102_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94B2FAB0-9756-4239-BF32-FC0CE01A65B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.<br>
<strong>From:</strong> guillaume ranquet (<em>guillaume.ranquet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 08:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13201.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13199.php">Ralph Castain: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi,
<br>
<p>yes, I have multiple clusters, some with infiniband, some with mx, some
<br>
nodes with both Myrinet et Infiniband hardware and others with ethernet
<br>
only.
<br>
<p>I reproduced it on a vanilla 1.4.1 and 1.4.2 with and without the
<br>
- --with-mx switch.
<br>
<p>this is the output I get on a node with ethernet and infiniband hardware.
<br>
note the Error regarding mx.
<br>
<p>$ ~/openmpi-1.4.2-bin/bin/mpirun ~/bwlat/mpi_helloworld
<br>
[bordeplage-9.bordeaux.grid5000.fr:32365] Error in mx_init (error No MX
<br>
device entry in /dev.)
<br>
[bordeplage-9.bordeaux.grid5000.fr:32365] mca_btl_mx_component_init:
<br>
mx_get_info(MX_NIC_COUNT) failed with status 4(MX not initialized.)
<br>
Hello world from process 0 of 1
<br>
[bordeplage-9:32365] *** Process received signal ***
<br>
[bordeplage-9:32365] Signal: Segmentation fault (11)
<br>
[bordeplage-9:32365] Signal code: Address not mapped (1)
<br>
[bordeplage-9:32365] Failing at address: 0x7f53bb7bb360
<br>
- --------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 32365 on node
<br>
bordeplage-9.bordeaux.grid5000.fr exited on signal 11 (Segmentation fault).
<br>
- --------------------------------------------------------------------------
<br>
<p>I recompiled a 1.4.2 --with-openib --without-mx and the problem is gone
<br>
(no segfault, no error message).
<br>
seems you aimed at the right spot.
<br>
<p>now the problem is that I need support for both.
<br>
I could compile two versions of openmpi and deploy appropriate versions
<br>
on each cluster with support either for mx, either for openib... but
<br>
it's quite painful and well, how should I manage nodes with both?
<br>
<p>for now I'll be sticking to a version of openmpi compiled with both
<br>
hardware support and --without-memory-manager.
<br>
unless the list has a better idea?
<br>
<p>thanks for the input, much appreciated.
<br>
if you need further infos, I can recompile everything with -g and fire a
<br>
gdb and locate the segfault more precisely.
<br>
<p>On 06/01/2010 03:34 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Are you running on nodes with both MX and OpenFabrics?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if this is a well-tested scenario -- there may be some strange interactions in the registered memory management between MX and OpenFabrics verbs.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, you should be able to disable Open MPI's memory management at run time in the 1.4 series by setting the environment variable OMPI_MCA_memory_ptmalloc2_disable to 1 (for good measure, ensure that it's set on all nodes where you are running Open MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 31, 2010, at 11:02 AM, guillaume ranquet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we use a slightly modified openmpi-1.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the patch is here:
</span><br>
<span class="quotelev1">&gt; &lt;diff&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/tcp/btl_tcp_proc.c.orig        2010-03-23
</span><br>
<span class="quotelev1">&gt; 14:01:28.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/tcp/btl_tcp_proc.c     2010-03-23 14:01:50.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -496,7 +496,7 @@
</span><br>
<span class="quotelev1">&gt;                                  local_interfaces[i]-&gt;ipv4_netmask)) {
</span><br>
<span class="quotelev1">&gt;                          weights[i][j] = CQ_PRIVATE_SAME_NETWORK;
</span><br>
<span class="quotelev1">&gt;                      } else {
</span><br>
<span class="quotelev1">&gt; -                        weights[i][j] = CQ_PRIVATE_DIFFERENT_NETWORK;
</span><br>
<span class="quotelev1">&gt; +                        weights[i][j] = CQ_NO_CONNECTION;
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt;                      best_addr[i][j] =
</span><br>
<span class="quotelev1">&gt; peer_interfaces[j]-&gt;ipv4_endpoint_addr;
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt; &lt;/diff&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually just discovered the existence of this patch,
</span><br>
<span class="quotelev1">&gt; I'm planning to run tests with a vanilla 1.4.1 and if possible a 1.4.2 ASAP.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/31/2010 04:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What OMPI version are you using?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 31, 2010, at 5:37 AM, guillaume ranquet wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm new to the list and quite new to the world of MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a bit of background:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm a sysadmin and have to provide a working environment (debian base)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for researchers to work with MPI : I'm _NOT_ an open-mpi user - I know
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C, but that's all.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I compile openmpi with the following selectors: --prefix=/usr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-openib=/usr --with-mx=/usr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (yes, everything goes in /usr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when running an mpi application (any application) on a machine equipped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with infiniband hardware, I get a segmentation fault during the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Finalise()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the code just runs fine on machines that have no Infiniband devices.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main (int argc,char *argv[])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  int i=0,rank, size;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Init (&amp;argc, &amp;argv);      /* starts MPI */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);        /* get current process id */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);        /* get number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while (i == 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      sleep(5);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my gdb-fu is quite rusty, but I get the vague idea it happens somewhere
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the MPI_Finalize(); (I can probably dig a bit there to find exactly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where, if it's relevant)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm running it with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun --mca orte_base_help_aggregate 0 --mca plm_rsh_agent oarsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -machinefile nodefile ./mpi_helloworld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; after various tests I've been suggested to try recompiling openmpi with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the --without-memory-manager selector.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it actually solves the issue and everything runs fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from what I understand (correct me if I'm wrong) the &quot;memory manager&quot; is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used with Infiniband RDMA to have a somewhat persistant memory region
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available on the device instead of destroying/recreating it everytime.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and thus, it's only a &quot;performance tunning&quot; issue, that disables the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi &quot;leave_pinned&quot; option?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the various questions I have:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is this bug/behaviour known?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if so, is there a better workaround?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as I'm not an openmpi user, I don't really know if it's considered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; acceptable to have this option disabled?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does the list want more details on this bug?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Guillaume Ranquet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Grid5000 support-staff.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v2.0.15 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iQEcBAEBAgAGBQJMBlHKAAoJEEzIl7PMEAlipHQIAJT4+oTQbGM8TijO9yWEqOCv
<br>
XTUQtYDz6wB/9FViEPncynRgNh8Sbxr2/fPSHkfaLAmVMGaoMpvS2rW6hx2XwXM7
<br>
tAWFHtfBxhjjGDG1blSxEyhn0fQMy7ZgPEZ66QTNUslFtZ3cbPcY+hBMwXNfalES
<br>
3JCuE1n7G54NF/jl/4sO4d0voFUxIK3Jyt63hisY5b3n4WCf77/yGVjCA24xG2pY
<br>
/GqJ3ZkaPNu59zkKUZG8RTGmjQfA+hbhh6NSEvSgvPvUIrOcDYFR/BkVAKSf7nGc
<br>
fc0jzzwiSFcodux+5UGZ5I8M27FmHKFxK3LvR1/KRXRC42/PdCBWQSnBjVxluFs=
<br>
=/w/Y
<br>
-----END PGP SIGNATURE-----
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13200/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13201.php">Jeff Squyres: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>Previous message:</strong> <a href="13199.php">Ralph Castain: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
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
