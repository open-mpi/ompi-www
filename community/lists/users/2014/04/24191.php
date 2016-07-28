<?
$subject_val = "Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 16:44:31 2014" -->
<!-- isoreceived="20140414204431" -->
<!-- sent="Mon, 14 Apr 2014 20:44:30 +0000" -->
<!-- isosent="20140414204430" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof" -->
<!-- id="0E07FDB7-69EE-4915-86E0-18EEBB1E65B5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="534B981F.1060700_at_mpimet.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 16:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24192.php">Elken, Tom: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24173.php">Luis Kornblueh: "[OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is a bug.  Doh!  
<br>
<p>Looks like we fixed it for one case, but missed another case.  :-(  
<br>
<p>I've filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4519">https://svn.open-mpi.org/trac/ompi/ticket/4519</a>, and will fix this shortly.
<br>
<p><p>On Apr 14, 2014, at 4:11 AM, Luis Kornblueh &lt;luis.kornblueh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached mympi_test.f90 does not compile with intel and OpenMPI Version 1.7.4, apparently it also does not compile with 1.8.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Intel Compiler version is 14.0.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tmp/ifortjKG1cP.o: In function `MAIN__':
</span><br>
<span class="quotelev1">&gt; mympi_test.f90:(.text+0x90): undefined reference to `mpi_sizeof0di4_'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is very similar to an error reported for older versions 1.4.x and 1.5x for the the Portland Group compiler:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2010/09/8443.php">https://www.open-mpi.org/community/lists/devel/2010/09/8443.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously this got fixed with version 1.6.*, and this version is working with the intel compiler as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheerio,
</span><br>
<span class="quotelev1">&gt; Luis
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;                             \\\\\\
</span><br>
<span class="quotelev1">&gt;                             (-0^0-)
</span><br>
<span class="quotelev1">&gt; --------------------------oOO--(_)--OOo-----------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Luis Kornblueh                           Tel. : +49-40-41173289
</span><br>
<span class="quotelev1">&gt; Max-Planck-Institute for Meteorology     Fax. : +49-40-41173298
</span><br>
<span class="quotelev1">&gt; Bundesstr. 53
</span><br>
<span class="quotelev1">&gt; D-20146 Hamburg                   Email: luis.kornblueh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Federal Republic of Germany
</span><br>
<span class="quotelev1">&gt; &lt;mympi_test.f90&gt;_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24192.php">Elken, Tom: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24190.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24173.php">Luis Kornblueh: "[OMPI users] openmpi-1.7.4/1.8 .0 problem with intel/mpi_sizeof"</a>
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
