<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 13:31:05 2010" -->
<!-- isoreceived="20100602173105" -->
<!-- sent="Wed, 02 Jun 2010 19:31:49 +0200" -->
<!-- isosent="20100602173149" -->
<!-- name="guillaume ranquet" -->
<!-- email="guillaume.ranquet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager." -->
<!-- id="4C069585.7030908_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB4DC077-AE1E-4D03-B29A-DB4EB1369C77_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager.<br>
<strong>From:</strong> guillaume ranquet (<em>guillaume.ranquet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 13:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13211.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13215.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 06/02/2010 06:00 PM, Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; On Jun 2, 2010, at 11:52 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What if you explicitly disable MX?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self --mca btl ^mx ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And can you try this as well?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~/openmpi-1.4.2-bin/bin/mpirun --mca btl openib,sm,self --mca pml ^cm ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<p>of course I can :)
<br>
<p>the first command seems to be wrong, I had an error message:
<br>
MCA framework parameters can only take a single negation operator
<br>
(&quot;^&quot;), and it must be at the beginning of the value.  The following
<br>
value violates this rule:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;openib,sm,self,^mx
<br>
<p>I tried to put the options in reverse order:
<br>
granquet_at_bordeplage-9 ~/openmpi-1.4.2 $ ~/openmpi-1.4.2-bin/bin/mpirun
<br>
- --mca btl ^mx --mca btl openib,sm,self ~/bwlat/mpi_helloworld
<br>
&lt;snip&gt;
<br>
&nbsp;&nbsp;BTLs attempted: tcp
<br>
&lt;/snip&gt;
<br>
I guess I got the commandline wrong, It seems I disabled everything but tcp.
<br>
<p>I then tried this:
<br>
<p>granquet_at_bordeplage-26 ~ $ ~/openmpi-1.4.2-bin/bin/mpirun --mca btl ^mx
<br>
~/bwlat/mpi_helloworld
<br>
[bordeplage-26.bordeaux.grid5000.fr:03346] Error in mx_init (error No MX
<br>
device entry in /dev.)
<br>
Hello world from process 0 of 1
<br>
[bordeplage-26:03346] *** Process received signal ***
<br>
[bordeplage-26:03346] Signal: Segmentation fault (11)
<br>
[bordeplage-26:03346] Signal code: Address not mapped (1)
<br>
[bordeplage-26:03346] Failing at address: 0x7fb51995b360
<br>
- --------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 3346 on node
<br>
bordeplage-26.bordeaux.grid5000.fr exited on signal 11 (Segmentation fault).
<br>
- --------------------------------------------------------------------------
<br>
<p>as I'm not doing anything in that helloworld, I just put self in there.
<br>
granquet_at_bordeplage-26 ~ $ ~/openmpi-1.4.2-bin/bin/mpirun --mca btl self
<br>
~/bwlat/mpi_helloworld
<br>
[bordeplage-26.bordeaux.grid5000.fr:03375] Error in mx_init (error No MX
<br>
device entry in /dev.)
<br>
Hello world from process 0 of 1
<br>
<p><p>granquet_at_bordeplage-9 ~/openmpi-1.4.2 $ ~/openmpi-1.4.2-bin/bin/mpirun
<br>
- --mca btl openib,sm,self --mca pml ^cm ~/bwlat/mpi_helloworld
<br>
Hello world from process 0 of 1
<br>
granquet_at_bordeplage-9 ~/openmpi-1.4.2 $
<br>
<p>I can tell it works :)
<br>
<p><span class="quotelev1">&gt; Ok, there is no segfault when it can't find IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which version of OMPI are you running on the IB nodes? 1.4.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can try to write a patch that does not alter the mpool if MX is not
</span><br>
available.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<p>the goal is to run the same version everywhere on every nodes (for the
<br>
sake of simplicity).
<br>
the current plans were targeting 1.4.1.
<br>
I don't think our users would mind upgrading to 1.4.2.
<br>
<p>thanks for the help, much appreciated :)
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
<p>iQEcBAEBAgAGBQJMBpWFAAoJEEzIl7PMEAliyTYIALbBDyZbDBV0PUjzJ3HFG9Nx
<br>
ihfhcygHf8Gt+nRpcFDaY8msyj0NSpPMyA9Mq0ljrGqw090z4srqF3WBFY/isxkj
<br>
W9cjxURIlLrZsnTmd767lr1WQP3Mfg7UG6Ti3rt6CAl870efJtfC/Dz+H8+aoj28
<br>
X7EcUIqUcr137m5IXz2vsxfjlmgf4zmEkTA3veYJSpcdtMqv24gCQgu6o7LFNP4+
<br>
a9++/sIx9/xn4qInIyNOgQr2YedAKPP0+leHoLY6c/WTzKrOh/qV8fZOBc/Jf72l
<br>
wov4VnLXk1MDozYt+/rY+3Jvmq0GpeISh1X4cYll01Mf+Zq0tnFOLoFSpUDjAU4=
<br>
=EVxy
<br>
-----END PGP SIGNATURE-----
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13212/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13211.php">Yves Caniou: "Re: [OMPI users] Bugs in MPI_Abort() -- MPI_Finalize()?"</a>
<li><strong>In reply to:</strong> <a href="13210.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13213.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Reply:</strong> <a href="13215.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
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
