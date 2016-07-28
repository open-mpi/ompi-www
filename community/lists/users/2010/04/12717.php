<?
$subject_val = "Re: [OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 19:03:32 2010" -->
<!-- isoreceived="20100420230332" -->
<!-- sent="Tue, 20 Apr 2010 18:03:25 -0500" -->
<!-- isosent="20100420230325" -->
<!-- name="Paul Cizmas" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="876F37A6-B7B8-4D5F-9820-D4244527186D_at_mac.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="591DC2F5-C855-4EF9-9BAC-B1CA3A68FACC_at_cisco.com" -->
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
<strong>Date:</strong> 2010-04-20 19:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12725.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12725.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it possible to have two openmpi-s on the same computer?  I have  
<br>
openmpi 1.3.2 working fine with gfortran but I cannot build openmpi  
<br>
1.4.1 with Absoft - I get this message from libtool:
<br>
<p>/bin/sh ../../../libtool   --mode=compile /Applications/Absoft11.0/bin/ 
<br>
f90 -I../../../ompi/include -I../../../ompi/include -p. -I. -I../../../ 
<br>
ompi/mpi/f90  -lU77 -c -o mpi.lo mpi.f90
<br>
libtool: compile:  /Applications/Absoft11.0/bin/f90 -I../../../ompi/ 
<br>
include -I../../../ompi/include -p. -I. -I../../../ompi/mpi/f90 -lU77 - 
<br>
c mpi.f90  -o .libs/mpi.o
<br>
Can't find the absoft directory.
<br>
Please set the ABSOFT environment variable and try again.
<br>
make[4]: *** [mpi.lo] Error 1
<br>
<p>Note that ABSOFT is properly set as in fact shown above on the first  
<br>
line.  In addition, the absolute address of the f90 (/Applications/ 
<br>
Absoft11.0/bin/f90) is correct.
<br>
<p>To recreate the problem I went to folder openmpi-1.4.1/ompi/mpi/f90,  
<br>
checked again ABSOFT variable and called libtool.  The result is  
<br>
obviously the same:
<br>
<p>sudo /bin/sh ../../../libtool   --mode=compile /Applications/ 
<br>
Absoft11.0/bin/f90 -I../../../ompi/include -I../../../ompi/include -p.  
<br>
-I. -I../../../ompi/mpi/f90  -lU77 -c -o mpi.lo mpi.f90
<br>
Password:
<br>
libtool: compile:  /Applications/Absoft11.0/bin/f90 -I../../../ompi/ 
<br>
include -I../../../ompi/include -p. -I. -I../../../ompi/mpi/f90 -lU77 - 
<br>
c mpi.f90  -o .libs/mpi.o
<br>
Can't find the absoft directory.
<br>
Please set the ABSOFT environment variable and try again.
<br>
<p>I am inclined to say that if it is not something that has to do with  
<br>
the existing openmpi 1.3.2 and gfortran interfering with the 1.4.1 and  
<br>
Absoft, then it might be a bug in openmpi.
<br>
<p>Paul
<br>
<p><p><p>On Apr 19, 2010, at 11:20 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 19, 2010, at 12:11 PM, Paul Cizmas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here there was a difference - it did work for both cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~$ ABSOFT=foo
</span><br>
<span class="quotelev2">&gt;&gt; ~$ testme
</span><br>
<span class="quotelev2">&gt;&gt; ABSOFT=foo
</span><br>
<span class="quotelev2">&gt;&gt; ~$ export ABSOFT=foo
</span><br>
<span class="quotelev2">&gt;&gt; ~$ testme
</span><br>
<span class="quotelev2">&gt;&gt; ABSOFT=foo
</span><br>
<span class="quotelev2">&gt;&gt; ~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could well be because you had previously exported ABSOFT...?   
</span><br>
<span class="quotelev1">&gt; (I forget the exact semantics offhand)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm somewhat at a loss to explain the behavior you're seeing, then.   
</span><br>
<span class="quotelev1">&gt; In this regard, OMPI is a pretty standard configure/make open source  
</span><br>
<span class="quotelev1">&gt; project -- we're not frobbing the environment before calling the  
</span><br>
<span class="quotelev1">&gt; underlying libtool script (this stuff is totally handled by  
</span><br>
<span class="quotelev1">&gt; Automake, actually).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some off-the-wall-ideas:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Is $ABSOFT set to the correct value?  I.e., could the error  
</span><br>
<span class="quotelev1">&gt; message be interpreted as &quot;The absoft compiler was unable to find  
</span><br>
<span class="quotelev1">&gt; what it expected to find in $ABSOFT&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Is there anything different/unique about your build environment  
</span><br>
<span class="quotelev1">&gt; compared to the environment you just ran those tests in?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. You might want to try editing &quot;libtool&quot; script that is emitted  
</span><br>
<span class="quotelev1">&gt; after running OMPI's configure and add some debugging to see if  
</span><br>
<span class="quotelev1">&gt; $ABSOFT really is set when that script is launched.
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
<li><strong>Next message:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>In reply to:</strong> <a href="12700.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12725.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12725.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
