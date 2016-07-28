<?
$subject_val = "Re: [OMPI users] machinefile and rank";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 04:06:52 2007" -->
<!-- isoreceived="20071107090652" -->
<!-- sent="Wed, 7 Nov 2007 11:06:46 +0200" -->
<!-- isosent="20071107090646" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machinefile and rank" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA02B4BD_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20071107074007.GX17548_at_dbmail.dk" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 04:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4427.php">Karsten Bolding: "[OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4425.php">Michael Schulz: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this feature is currently in the SVN.
<br>
You can use the syntax in:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1023">https://svn.open-mpi.org/trac/ompi/ticket/1023</a>
<br>
Currently the process affinity doesn't work but the ranks are running
<br>
on the machines as specify in the hostfile.
<br>
<p>Currently Ralph is working on removing the new syntax from the hostfile
<br>
And together we will implement it on anew config file.
<br>
<p>Sharon.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Karsten Bolding
<br>
Sent: Wednesday, November 07, 2007 9:40 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] machinefile and rank
<br>
<p>On Tue, Nov 06, 2007 at 09:22:50 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, not yet.  I believe that this kind of functionality is
</span><br>
<p><span class="quotelev1">&gt; slated for the v1.3 series -- is that right Ralph/Voltaire?
</span><br>
<p>thats a pity since performance of the setup is horrible if I can't
<br>
control the order. 
<br>
<p>the svn code will develop into v1.3 - right? Is the feature already in
<br>
svn?
<br>
<p>kb
<br>
<p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4427.php">Karsten Bolding: "[OMPI users] problems compiling svn-version"</a>
<li><strong>Previous message:</strong> <a href="4425.php">Michael Schulz: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
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
