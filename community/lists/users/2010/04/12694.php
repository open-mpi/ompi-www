<?
$subject_val = "Re: [OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 09:31:23 2010" -->
<!-- isoreceived="20100419133123" -->
<!-- sent="Mon, 19 Apr 2010 08:30:44 -0500" -->
<!-- isosent="20100419133044" -->
<!-- name="Paul Cizmas" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="C6459913-130B-4230-9206-996B892442AC_at_mac.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DC5E3AA2-BB34-49B0-B19D-BE140F052F18_at_cisco.com" -->
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
<strong>Date:</strong> 2010-04-19 09:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12691.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ABSOFT is set and exported.  I can double check this by doing  
<br>
&quot;echo $ABSOFT&quot; and it appears that it is okay.
<br>
<p>On Apr 19, 2010, at 7:11 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I have not seen this before; environment variables that are defined  
</span><br>
<span class="quotelev1">&gt; in the shell where you invoked &quot;make&quot; should propagate down to the  
</span><br>
<span class="quotelev1">&gt; actual process where the compilers (etc.) are invoked.  Is ABSOFT  
</span><br>
<span class="quotelev1">&gt; exported, or just set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do note that the compile command line is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool   --mode=compile /Applications/Absoft11.0/ 
</span><br>
<span class="quotelev1">&gt; bin/f90 -I../../../ompi/include -I../../../ompi/include -p. -I. - 
</span><br>
<span class="quotelev1">&gt; I../../../ompi/mpi/f90  -m64 -lU77 -c -o mpi.lo mpi.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have your .bashrc configured such that it is run for /bin/sh  
</span><br>
<span class="quotelev1">&gt; as well?  (I'm a tcsh user; forgive if this is a dumb question)
</span><br>
<p>I do not know this!!!  How can I check it?
<br>
<p>Thank you,
<br>
Paul
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2010, at 11:07 AM, Paul Cizmas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ricardo:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your reply.  The variable ABSOFT is currently defined  
</span><br>
<span class="quotelev2">&gt;&gt; in the .bashrc file.  One can check this by doing &quot;echo $ABSOFT&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; that returns the location &quot;/Applications/Absoft11.0&quot;.  However, the  
</span><br>
<span class="quotelev2">&gt;&gt; makefile (or one of its depend files) does not know the $ABSOFT  
</span><br>
<span class="quotelev2">&gt;&gt; value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 17, 2010, at 3:00 AM, Ricardo Reis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 16 Apr 2010, Paul Cizmas wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to add in the makefile the following line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ABSOFT = /Applications/Absoft11.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but this did not help.  I wonder if this definition of ABSOFT  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; must be added to another file.  If so, what this file should be?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generally ABSOFT should be an environment variable set, for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance, in the init file of your shell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please read <a href="http://www.absoft.com/Support/FAQ/">http://www.absoft.com/Support/FAQ/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lixfaq_installation.htm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ricardo Reis
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'Non Serviam'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD candidate @ Lasef
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keep them Flying! Ajude a/help Aero F&#233;nix!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          &lt; sent with alpine 2.00  
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12693.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12691.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12695.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12696.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
