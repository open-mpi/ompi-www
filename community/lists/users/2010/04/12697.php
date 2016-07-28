<?
$subject_val = "Re: [OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 09:51:24 2010" -->
<!-- isoreceived="20100419135124" -->
<!-- sent="Mon, 19 Apr 2010 08:51:11 -0500" -->
<!-- isosent="20100419135111" -->
<!-- name="Paul Cizmas" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="4BCF083C-D985-450B-8DBA-773C37D8E2B2_at_mac.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1004191442300.27221_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] OS X - Can't find the absoft directory<br>
<strong>From:</strong> Paul Cizmas (<em>cizmas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 09:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2010, at 8:43 AM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 19 Apr 2010, Paul Cizmas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ABSOFT is set and exported.  I can double check this by doing  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;echo $ABSOFT&quot; and it appears that it is okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it in the path? Besides being set, I mean...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=$ABSOFT:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just trying to cover all corners...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and maybe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=$ABSOFT/bin:$PATH
</span><br>
<p>Yes, it looks like this:
<br>
<p>ABSOFT=/Applications/Absoft11.0
<br>
PATH=/opt/openmpi/bin:$PATH
<br>
PATH=$ABSOFT/bin:$PATH
<br>
export ABSOFT PATH
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 19, 2010, at 7:11 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have your .bashrc configured such that it is run for /bin/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sh as well?  (I'm a tcsh user; forgive if this is a dumb question)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know this!!!  How can I check it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hmmm, in many systems generally sh is just a simlink to bash...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2028.0 $ ls -l /bin/sh
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 root root 4 Sep  7  2009 /bin/sh -&gt; bash
</span><br>
<p>/bin/sh is not a link on my Mac OS X 10.5.8.  I get this:
<br>
<p>ls -l /bin/sh
<br>
-r-xr-xr-x  1 root  wheel  1244960 May 23  2008 /bin/sh*
<br>
~$
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo Reis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'Non Serviam'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PhD candidate @ Lasef
</span><br>
<span class="quotelev1">&gt; Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt; <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep them Flying! Ajude a/help Aero F&#233;nix!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                           &lt; sent with alpine 2.00  
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
