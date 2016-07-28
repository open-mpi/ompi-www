<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  1 09:34:49 2010" -->
<!-- isoreceived="20100601133449" -->
<!-- sent="Tue, 1 Jun 2010 09:34:44 -0400" -->
<!-- isosent="20100601133444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager." -->
<!-- id="94B2FAB0-9756-4239-BF32-FC0CE01A65B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C03CF77.1080606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-01 09:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13194.php">Hicham Lahlou: "[OMPI users] heterogeneous cluster setup"</a>
<li><strong>Previous message:</strong> <a href="13192.php">Javier Fern&#225;ndez: "[OMPI users] reasons for jitter other than paffinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you running on nodes with both MX and OpenFabrics?
<br>
<p>I don't know if this is a well-tested scenario -- there may be some strange interactions in the registered memory management between MX and OpenFabrics verbs.  
<br>
<p>FWIW, you should be able to disable Open MPI's memory management at run time in the 1.4 series by setting the environment variable OMPI_MCA_memory_ptmalloc2_disable to 1 (for good measure, ensure that it's set on all nodes where you are running Open MPI).
<br>
<p><p><p>On May 31, 2010, at 11:02 AM, guillaume ranquet wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
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
<span class="quotelev1">&gt; - --- ompi/mca/btl/tcp/btl_tcp_proc.c.orig        2010-03-23
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
<span class="quotelev1">&gt; - -                        weights[i][j] = CQ_PRIVATE_DIFFERENT_NETWORK;
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
<span class="quotelev2">&gt; &gt; What OMPI version are you using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 31, 2010, at 5:37 AM, guillaume ranquet wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I'm new to the list and quite new to the world of MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a bit of background:
</span><br>
<span class="quotelev2">&gt; &gt; I'm a sysadmin and have to provide a working environment (debian base)
</span><br>
<span class="quotelev2">&gt; &gt; for researchers to work with MPI : I'm _NOT_ an open-mpi user - I know
</span><br>
<span class="quotelev2">&gt; &gt; C, but that's all.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I compile openmpi with the following selectors: --prefix=/usr
</span><br>
<span class="quotelev2">&gt; &gt; --with-openib=/usr --with-mx=/usr
</span><br>
<span class="quotelev2">&gt; &gt; (yes, everything goes in /usr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when running an mpi application (any application) on a machine equipped
</span><br>
<span class="quotelev2">&gt; &gt; with infiniband hardware, I get a segmentation fault during the
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalise()
</span><br>
<span class="quotelev2">&gt; &gt; the code just runs fine on machines that have no Infiniband devices.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc,char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  int i=0,rank, size;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init (&amp;argc, &amp;argv);      /* starts MPI */
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);        /* get current process id */
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);        /* get number of
</span><br>
<span class="quotelev2">&gt; &gt; processes */
</span><br>
<span class="quotelev2">&gt; &gt; while (i == 0)
</span><br>
<span class="quotelev2">&gt; &gt;      sleep(5);
</span><br>
<span class="quotelev2">&gt; &gt;  printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;  return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; &lt;/code&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; my gdb-fu is quite rusty, but I get the vague idea it happens somewhere
</span><br>
<span class="quotelev2">&gt; &gt; in the MPI_Finalize(); (I can probably dig a bit there to find exactly
</span><br>
<span class="quotelev2">&gt; &gt; where, if it's relevant)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm running it with:
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --mca orte_base_help_aggregate 0 --mca plm_rsh_agent oarsh
</span><br>
<span class="quotelev2">&gt; &gt; -machinefile nodefile ./mpi_helloworld
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; after various tests I've been suggested to try recompiling openmpi with
</span><br>
<span class="quotelev2">&gt; &gt; the --without-memory-manager selector.
</span><br>
<span class="quotelev2">&gt; &gt; it actually solves the issue and everything runs fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; from what I understand (correct me if I'm wrong) the &quot;memory manager&quot; is
</span><br>
<span class="quotelev2">&gt; &gt; used with Infiniband RDMA to have a somewhat persistant memory region
</span><br>
<span class="quotelev2">&gt; &gt; available on the device instead of destroying/recreating it everytime.
</span><br>
<span class="quotelev2">&gt; &gt; and thus, it's only a &quot;performance tunning&quot; issue, that disables the
</span><br>
<span class="quotelev2">&gt; &gt; openmpi &quot;leave_pinned&quot; option?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the various questions I have:
</span><br>
<span class="quotelev2">&gt; &gt; is this bug/behaviour known?
</span><br>
<span class="quotelev2">&gt; &gt; if so, is there a better workaround?
</span><br>
<span class="quotelev2">&gt; &gt; as I'm not an openmpi user, I don't really know if it's considered
</span><br>
<span class="quotelev2">&gt; &gt; acceptable to have this option disabled?
</span><br>
<span class="quotelev2">&gt; &gt; does the list want more details on this bug?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Guillaume Ranquet.
</span><br>
<span class="quotelev2">&gt; &gt; Grid5000 support-staff.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v2.0.15 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iQEcBAEBAgAGBQJMA893AAoJEEzIl7PMEAliCWIH/0aheCEvCDeDDhNvCuAetCbF
</span><br>
<span class="quotelev1">&gt; jny45swb8jmfNBVIYd9dTruBmU/1WKC0QBcyxWG0El6ST/xKfXMXGBpKf+tC2Hi1
</span><br>
<span class="quotelev1">&gt; GS2pz8YEW4x/m3dcVxCVQS9wZIpIG/JHcBqduQtGtlbLq51mTLoc1ygedkCqHjIA
</span><br>
<span class="quotelev1">&gt; jaimi9VXDyjyeNUV9Yby0zejLO2nRkR29bZ2+I8N8eiHw5lLkstyrQqjsF5d0R1i
</span><br>
<span class="quotelev1">&gt; Dvr7xtrYEDeqgrdTjv6Gb4BkEqatPH6QEFdS4SIGL/6BPhMgiV2MBn6G/Lsvvy6u
</span><br>
<span class="quotelev1">&gt; Z97CGwt9usicyxQpCLXtrPTpjUTcqLjlEx7iIVsFtpL4VzqlZYDMt2TXNfheRig=
</span><br>
<span class="quotelev1">&gt; =MtAr
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13194.php">Hicham Lahlou: "[OMPI users] heterogeneous cluster setup"</a>
<li><strong>Previous message:</strong> <a href="13192.php">Javier Fern&#225;ndez: "[OMPI users] reasons for jitter other than paffinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13200.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
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
