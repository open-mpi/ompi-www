<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 31 11:01:30 2010" -->
<!-- isoreceived="20100531150130" -->
<!-- sent="Mon, 31 May 2010 17:02:15 +0200" -->
<!-- isosent="20100531150215" -->
<!-- name="guillaume ranquet" -->
<!-- email="guillaume.ranquet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager." -->
<!-- id="4C03CF77.1080606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FFF79FB7-9E51-4E41-A6A4-434CB7F4496C_at_open-mpi.org" -->
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
<strong>From:</strong> guillaume ranquet (<em>guillaume.ranquet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-31 11:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13192.php">Javier Fernández: "[OMPI users] reasons for jitter other than paffinity"</a>
<li><strong>Previous message:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>we use a slightly modified openmpi-1.4.1
<br>
<p>the patch is here:
<br>
&lt;diff&gt;
<br>
- --- ompi/mca/btl/tcp/btl_tcp_proc.c.orig        2010-03-23
<br>
14:01:28.000000000 +0100
<br>
+++ ompi/mca/btl/tcp/btl_tcp_proc.c     2010-03-23 14:01:50.000000000 +0100
<br>
@@ -496,7 +496,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_interfaces[i]-&gt;ipv4_netmask)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weights[i][j] = CQ_PRIVATE_SAME_NETWORK;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
- -                        weights[i][j] = CQ_PRIVATE_DIFFERENT_NETWORK;
<br>
+                        weights[i][j] = CQ_NO_CONNECTION;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;best_addr[i][j] =
<br>
peer_interfaces[j]-&gt;ipv4_endpoint_addr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&lt;/diff&gt;
<br>
<p>I actually just discovered the existence of this patch,
<br>
I'm planning to run tests with a vanilla 1.4.1 and if possible a 1.4.2 ASAP.
<br>
<p><p>On 05/31/2010 04:18 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; What OMPI version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 31, 2010, at 5:37 AM, guillaume ranquet wrote:
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
<span class="quotelev1">&gt; --with-openib=/usr --with-mx=/usr
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
<span class="quotelev1">&gt; -machinefile nodefile ./mpi_helloworld
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
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v2.0.15 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iQEcBAEBAgAGBQJMA893AAoJEEzIl7PMEAliCWIH/0aheCEvCDeDDhNvCuAetCbF
<br>
jny45swb8jmfNBVIYd9dTruBmU/1WKC0QBcyxWG0El6ST/xKfXMXGBpKf+tC2Hi1
<br>
GS2pz8YEW4x/m3dcVxCVQS9wZIpIG/JHcBqduQtGtlbLq51mTLoc1ygedkCqHjIA
<br>
jaimi9VXDyjyeNUV9Yby0zejLO2nRkR29bZ2+I8N8eiHw5lLkstyrQqjsF5d0R1i
<br>
Dvr7xtrYEDeqgrdTjv6Gb4BkEqatPH6QEFdS4SIGL/6BPhMgiV2MBn6G/Lsvvy6u
<br>
Z97CGwt9usicyxQpCLXtrPTpjUTcqLjlEx7iIVsFtpL4VzqlZYDMt2TXNfheRig=
<br>
=MtAr
<br>
-----END PGP SIGNATURE-----
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13191/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13192.php">Javier Fernández: "[OMPI users] reasons for jitter other than paffinity"</a>
<li><strong>Previous message:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<li><strong>In reply to:</strong> <a href="13190.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
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
