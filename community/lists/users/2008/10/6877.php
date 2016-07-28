<?
$subject_val = "Re: [OMPI users] Problem launching onto Bourne shell";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 08:54:05 2008" -->
<!-- isoreceived="20081007125405" -->
<!-- sent="Tue, 7 Oct 2008 06:53:59 -0600" -->
<!-- isosent="20081007125359" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching onto Bourne shell" -->
<!-- id="81C00BCA-4D9C-4F42-AD2B-8647AD401F40_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B7AB668D-3269-4457-85CC-C3533B9D806A_at_ll.mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem launching onto Bourne shell<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-07 08:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am unaware of anything in the code that would &quot;source .profile&quot; for  
<br>
you. I believe the FAQ page is in error here.
<br>
<p>Ralph
<br>
<p>On Oct 6, 2008, at 7:47 PM, Hahn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Great, that worked, thanks!  However, it still concerns me that the  
</span><br>
<span class="quotelev1">&gt; FAQ page says that mpirun will execute .profile which doesn't seem  
</span><br>
<span class="quotelev1">&gt; to work for me.  Are there any configuration issues that could  
</span><br>
<span class="quotelev1">&gt; possibly be preventing mpirun from doing this?  It would certainly  
</span><br>
<span class="quotelev1">&gt; be more convenient if I could maintain my environment in a  
</span><br>
<span class="quotelev1">&gt; single .profile file instead of adding what could potentially be a  
</span><br>
<span class="quotelev1">&gt; lot of -x arguments to my mpirun command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hahn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 6, 2008, at 5:44 PM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tYou can forward your local env with mpirun -x LD_LIBRARY_PATH. As an
</span><br>
<span class="quotelev2">&gt;&gt; alternative you can set specific values with mpirun -x
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/some/where:/some/where/else . More information with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --help (or man mpirun).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 6 oct. 08 &#224; 16:06, Hahn Kim a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having difficulty launching an Open MPI job onto a machine that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is running the Bourne shell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's my basic setup.  I have two machines, one is an x86-based
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine running bash and the other is a Cell-based machine running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bourne shell.  I'm running mpirun from the x86 machine, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launches a C++ MPI application onto the Cell machine.  I get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  error while loading shared libraries: libstdc++.so.6: cannot open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The basic problem is that LD_LIBRARY_PATH needs to be set to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory that contains libstdc++.so.6 for the Cell.  I set the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following line in .profile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  export LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is the path to the PPC libraries for Cell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now if I log directly into the Cell machine and run the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly from the command line, I don't get the above error.  But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun still fails, even after setting LD_LIBRARY_PATH in .profile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a sanity check, I did the following.  I ran the following command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the x86 machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -np 1 --host cab0 env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which, among others things, shows me the following value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LD_LIBRARY_PATH=/tools/openmpi-1.2.5/lib:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I log into the Cell machine and run env directly from the command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line, I get the following value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it appears that .profile gets sourced when I log in but not when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, according to the OpenMPI FAQ (<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ), mpirun is supposed to directly call .profile since Bourne shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't automatically call it for non-interactive shells.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have any insight as to why my environment isn't being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set properly?  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hahn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hahn Kim, hgk_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MIT Lincoln Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 244 Wood St., Lexington, MA 02420
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: 781-981-0940, Fax: 781-981-5255
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev2">&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hahn Kim
</span><br>
<span class="quotelev1">&gt; MIT Lincoln Laboratory   Phone: (781) 981-0940
</span><br>
<span class="quotelev1">&gt; 244 Wood Street, S2-252  Fax: (781) 981-5255
</span><br>
<span class="quotelev1">&gt; Lexington, MA 02420      E-mail: hgk_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6878.php">Yann JOBIC: "[OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6876.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6883.php">Jeff Squyres: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
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
