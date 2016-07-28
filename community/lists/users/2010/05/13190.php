<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 31 10:18:59 2010" -->
<!-- isoreceived="20100531141859" -->
<!-- sent="Mon, 31 May 2010 08:18:30 -0600" -->
<!-- isosent="20100531141830" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager." -->
<!-- id="FFF79FB7-9E51-4E41-A6A4-434CB7F4496C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C039F5C.50801_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-31 10:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13189.php">guillaume ranquet: "[OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13189.php">guillaume ranquet: "[OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What OMPI version are you using?
<br>
<p>On May 31, 2010, at 5:37 AM, guillaume ranquet wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm new to the list and quite new to the world of MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a bit of background:
</span><br>
<span class="quotelev1">&gt; I'm a sysadmin and have to provide a working environment (debian base)
</span><br>
<span class="quotelev1">&gt; for researchers to work with MPI : I'm _NOT_ an open-mpi user - I know
</span><br>
<span class="quotelev1">&gt; C, but that's all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile openmpi with the following selectors: --prefix=/usr
</span><br>
<span class="quotelev1">&gt; - --with-openib=/usr --with-mx=/usr
</span><br>
<span class="quotelev1">&gt; (yes, everything goes in /usr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when running an mpi application (any application) on a machine equipped
</span><br>
<span class="quotelev1">&gt; with infiniband hardware, I get a segmentation fault during the
</span><br>
<span class="quotelev1">&gt; MPI_Finalise()
</span><br>
<span class="quotelev1">&gt; the code just runs fine on machines that have no Infiniband devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc,char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i=0,rank, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);      /* starts MPI */
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);        /* get current process id */
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);        /* get number of
</span><br>
<span class="quotelev1">&gt; processes */
</span><br>
<span class="quotelev1">&gt; while (i == 0)
</span><br>
<span class="quotelev1">&gt;      sleep(5);
</span><br>
<span class="quotelev1">&gt;  printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my gdb-fu is quite rusty, but I get the vague idea it happens somewhere
</span><br>
<span class="quotelev1">&gt; in the MPI_Finalize(); (I can probably dig a bit there to find exactly
</span><br>
<span class="quotelev1">&gt; where, if it's relevant)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running it with:
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca orte_base_help_aggregate 0 --mca plm_rsh_agent oarsh
</span><br>
<span class="quotelev1">&gt; - -machinefile nodefile ./mpi_helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after various tests I've been suggested to try recompiling openmpi with
</span><br>
<span class="quotelev1">&gt; the --without-memory-manager selector.
</span><br>
<span class="quotelev1">&gt; it actually solves the issue and everything runs fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from what I understand (correct me if I'm wrong) the &quot;memory manager&quot; is
</span><br>
<span class="quotelev1">&gt; used with Infiniband RDMA to have a somewhat persistant memory region
</span><br>
<span class="quotelev1">&gt; available on the device instead of destroying/recreating it everytime.
</span><br>
<span class="quotelev1">&gt; and thus, it's only a &quot;performance tunning&quot; issue, that disables the
</span><br>
<span class="quotelev1">&gt; openmpi &quot;leave_pinned&quot; option?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the various questions I have:
</span><br>
<span class="quotelev1">&gt; is this bug/behaviour known?
</span><br>
<span class="quotelev1">&gt; if so, is there a better workaround?
</span><br>
<span class="quotelev1">&gt; as I'm not an openmpi user, I don't really know if it's considered
</span><br>
<span class="quotelev1">&gt; acceptable to have this option disabled?
</span><br>
<span class="quotelev1">&gt; does the list want more details on this bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Guillaume Ranquet.
</span><br>
<span class="quotelev1">&gt; Grid5000 support-staff.
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v2.0.15 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iQEcBAEBAgAGBQJMA59cAAoJEEzIl7PMEAli4EEH/AuR6swdZon43UnPPWt342tS
</span><br>
<span class="quotelev1">&gt; Eyl6KYRR9PHJw0OEhg4BjOIZYHrMlPYBaD7vzTdMJ7uNXw2F12VpsZgcf2YGgpK1
</span><br>
<span class="quotelev1">&gt; Ww8TwWz18tkG05GUErHph8yA3nskIUsWy2zzuiHxHD5h4v1bEhaZGDdGXTuv3aTE
</span><br>
<span class="quotelev1">&gt; a+9ENTtzSIcI2sXdLHZLjSqlOe2/c6d/mC+9wXGpSx8A48xMyqUegPRcyumIp443
</span><br>
<span class="quotelev1">&gt; OG1ldSRpICL9FnSrgr3SbF2b7/nlLRDVOC2qmf1SGWw3sP4Bqpda8rKRBvTLAPTk
</span><br>
<span class="quotelev1">&gt; vXC65+SAAXhGXhm6DAA5FKIicqMKe1NdgC4qPnu4jtiHXWL8fADBsjk8h3UReAY=
</span><br>
<span class="quotelev1">&gt; =xENR
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13189.php">guillaume ranquet: "[OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13189.php">guillaume ranquet: "[OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
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
