<?
$subject_val = "Re: [OMPI users] Problem launching onto Bourne shell";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 21:47:18 2008" -->
<!-- isoreceived="20081007014718" -->
<!-- sent="Mon, 6 Oct 2008 21:47:30 -0400" -->
<!-- isosent="20081007014730" -->
<!-- name="Hahn Kim" -->
<!-- email="hgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching onto Bourne shell" -->
<!-- id="B7AB668D-3269-4457-85CC-C3533B9D806A_at_ll.mit.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CBD71D71-A81A-45B5-B812-06205F3A8577_at_eecs.utk.edu" -->
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
<strong>From:</strong> Hahn Kim (<em>hgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 21:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6874.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>In reply to:</strong> <a href="6871.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6877.php">Ralph Castain: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6877.php">Ralph Castain: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great, that worked, thanks!  However, it still concerns me that the  
<br>
FAQ page says that mpirun will execute .profile which doesn't seem to  
<br>
work for me.  Are there any configuration issues that could possibly  
<br>
be preventing mpirun from doing this?  It would certainly be more  
<br>
convenient if I could maintain my environment in a single .profile  
<br>
file instead of adding what could potentially be a lot of -x  
<br>
arguments to my mpirun command.
<br>
<p>Hahn
<br>
<p>On Oct 6, 2008, at 5:44 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; tYou can forward your local env with mpirun -x LD_LIBRARY_PATH. As an
</span><br>
<span class="quotelev1">&gt; alternative you can set specific values with mpirun -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/some/where:/some/where/else . More information with
</span><br>
<span class="quotelev1">&gt; mpirun --help (or man mpirun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 6 oct. 08 &#224; 16:06, Hahn Kim a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having difficulty launching an Open MPI job onto a machine that
</span><br>
<span class="quotelev2">&gt;&gt; is running the Bourne shell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's my basic setup.  I have two machines, one is an x86-based
</span><br>
<span class="quotelev2">&gt;&gt; machine running bash and the other is a Cell-based machine running
</span><br>
<span class="quotelev2">&gt;&gt; Bourne shell.  I'm running mpirun from the x86 machine, which
</span><br>
<span class="quotelev2">&gt;&gt; launches a C++ MPI application onto the Cell machine.  I get the
</span><br>
<span class="quotelev2">&gt;&gt; following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   error while loading shared libraries: libstdc++.so.6: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The basic problem is that LD_LIBRARY_PATH needs to be set to the
</span><br>
<span class="quotelev2">&gt;&gt; directory that contains libstdc++.so.6 for the Cell.  I set the
</span><br>
<span class="quotelev2">&gt;&gt; following line in .profile:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   export LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which is the path to the PPC libraries for Cell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now if I log directly into the Cell machine and run the program
</span><br>
<span class="quotelev2">&gt;&gt; directly from the command line, I don't get the above error.  But
</span><br>
<span class="quotelev2">&gt;&gt; mpirun still fails, even after setting LD_LIBRARY_PATH in .profile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a sanity check, I did the following.  I ran the following command
</span><br>
<span class="quotelev2">&gt;&gt; from the x86 machine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun -np 1 --host cab0 env
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which, among others things, shows me the following value:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   LD_LIBRARY_PATH=/tools/openmpi-1.2.5/lib:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I log into the Cell machine and run env directly from the command
</span><br>
<span class="quotelev2">&gt;&gt; line, I get the following value:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it appears that .profile gets sourced when I log in but not when
</span><br>
<span class="quotelev2">&gt;&gt; mpirun runs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, according to the OpenMPI FAQ (<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; faq/?category=running#adding-ompi-to-path
</span><br>
<span class="quotelev2">&gt;&gt; ), mpirun is supposed to directly call .profile since Bourne shell
</span><br>
<span class="quotelev2">&gt;&gt; doesn't automatically call it for non-interactive shells.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any insight as to why my environment isn't being
</span><br>
<span class="quotelev2">&gt;&gt; set properly?  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hahn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Hahn Kim, hgk_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; MIT Lincoln Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 244 Wood St., Lexington, MA 02420
</span><br>
<span class="quotelev2">&gt;&gt; Tel: 781-981-0940, Fax: 781-981-5255
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
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
--
Hahn Kim
MIT Lincoln Laboratory   Phone: (781) 981-0940
244 Wood Street, S2-252  Fax: (781) 981-5255
Lexington, MA 02420      E-mail: hgk_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6874.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>In reply to:</strong> <a href="6871.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6877.php">Ralph Castain: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6877.php">Ralph Castain: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
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
