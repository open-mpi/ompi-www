<?
$subject_val = "Re: [OMPI users] Problem launching onto Bourne shell";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 17:44:40 2008" -->
<!-- isoreceived="20081006214440" -->
<!-- sent="Mon, 6 Oct 2008 17:44:28 -0400" -->
<!-- isosent="20081006214428" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem launching onto Bourne shell" -->
<!-- id="CBD71D71-A81A-45B5-B812-06205F3A8577_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3C52D52D-C424-4AD7-8E53-911C5F6DD1B6_at_ll.mit.edu" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-06 17:44:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6870.php">Hahn Kim: "[OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6870.php">Hahn Kim: "[OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
tYou can forward your local env with mpirun -x LD_LIBRARY_PATH. As an  
<br>
alternative you can set specific values with mpirun -x  
<br>
LD_LIBRARY_PATH=/some/where:/some/where/else . More information with  
<br>
mpirun --help (or man mpirun).
<br>
<p>Aurelien
<br>
<p><p><p>Le 6 oct. 08 &#224; 16:06, Hahn Kim a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having difficulty launching an Open MPI job onto a machine that  
</span><br>
<span class="quotelev1">&gt; is running the Bourne shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my basic setup.  I have two machines, one is an x86-based  
</span><br>
<span class="quotelev1">&gt; machine running bash and the other is a Cell-based machine running  
</span><br>
<span class="quotelev1">&gt; Bourne shell.  I'm running mpirun from the x86 machine, which  
</span><br>
<span class="quotelev1">&gt; launches a C++ MPI application onto the Cell machine.  I get the  
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   error while loading shared libraries: libstdc++.so.6: cannot open  
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The basic problem is that LD_LIBRARY_PATH needs to be set to the  
</span><br>
<span class="quotelev1">&gt; directory that contains libstdc++.so.6 for the Cell.  I set the  
</span><br>
<span class="quotelev1">&gt; following line in .profile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   export LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is the path to the PPC libraries for Cell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if I log directly into the Cell machine and run the program  
</span><br>
<span class="quotelev1">&gt; directly from the command line, I don't get the above error.  But  
</span><br>
<span class="quotelev1">&gt; mpirun still fails, even after setting LD_LIBRARY_PATH in .profile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a sanity check, I did the following.  I ran the following command  
</span><br>
<span class="quotelev1">&gt; from the x86 machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun -np 1 --host cab0 env
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which, among others things, shows me the following value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   LD_LIBRARY_PATH=/tools/openmpi-1.2.5/lib:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I log into the Cell machine and run env directly from the command  
</span><br>
<span class="quotelev1">&gt; line, I get the following value:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   LD_LIBRARY_PATH=/opt/cell/toolchain/lib/gcc/ppu/4.1.1/32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it appears that .profile gets sourced when I log in but not when  
</span><br>
<span class="quotelev1">&gt; mpirun runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, according to the OpenMPI FAQ (<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a> 
</span><br>
<span class="quotelev1">&gt; ), mpirun is supposed to directly call .profile since Bourne shell  
</span><br>
<span class="quotelev1">&gt; doesn't automatically call it for non-interactive shells.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any insight as to why my environment isn't being  
</span><br>
<span class="quotelev1">&gt; set properly?  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hahn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hahn Kim, hgk_at_[hidden]
</span><br>
<span class="quotelev1">&gt; MIT Lincoln Laboratory
</span><br>
<span class="quotelev1">&gt; 244 Wood St., Lexington, MA 02420
</span><br>
<span class="quotelev1">&gt; Tel: 781-981-0940, Fax: 781-981-5255
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
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6872.php">Josh Hursey: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6870.php">Hahn Kim: "[OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>In reply to:</strong> <a href="6870.php">Hahn Kim: "[OMPI users] Problem launching onto Bourne shell"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
<li><strong>Reply:</strong> <a href="6873.php">Hahn Kim: "Re: [OMPI users] Problem launching onto Bourne shell"</a>
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
