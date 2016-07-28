<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 19 12:03:33 2007" -->
<!-- isoreceived="20071019160333" -->
<!-- sent="Fri, 19 Oct 2007 09:03:28 -0700" -->
<!-- isosent="20071019160328" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64" -->
<!-- id="df8c8a6d0710190903q42d04f7u6186528d72d0f1ff_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5849f1820710181129ta3599e5x7419f17de38a255b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-19 12:03:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>In reply to:</strong> <a href="4251.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I caught some of that above...I suspect rpm's build environment for
<br>
cross-platform building &quot;leaves much to be desired&quot;...At this point, I
<br>
was thinking my best option would be to set up a i386 box and build
<br>
the .i386 libs on that.
<br>
<p>I must say, I'm pretty disappointed in rpm, as the x86_64 platform
<br>
seems to &quot;require&quot; both 64 and 32 versions of its libs and devel
<br>
files.  Yet, on a x86_64 platform, it doesn't appear that the 32-bit
<br>
versions can be generated reliably.
<br>
<p>Unfortunately for me, I need the binaries in rpm form, as this will be
<br>
&quot;mass-deployed&quot; to a ROCKs cluster, and the installer installs rpms.
<br>
<p>--Jim
<br>
<p>On 10/18/07, Gurhan &lt;gurhan.ozen_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:33918: gcc -DNDEBUG -O2 -g -pipe -m32 -march=i386
</span><br>
<span class="quotelev1">&gt; -mtune=pentium4 -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt; configure:33925: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33935: gfortran   conftestf.f90 conftest.o -o conftest
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: warning: i386 architecture of input file `conftest.o' is
</span><br>
<span class="quotelev1">&gt; incompatible with i386:x86-64 output
</span><br>
<span class="quotelev1">&gt; configure:33942: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33990: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:33997: $? = 139
</span><br>
<span class="quotelev1">&gt; configure:34006: error: Could not determine size of LOGICAL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this correct? We are feeding a 32-bit object file to be linked with
</span><br>
<span class="quotelev1">&gt; a 64-bit output executable file? When target is i386 shouldn't -m32
</span><br>
<span class="quotelev1">&gt; -march=i386 need to be passed on to gfortran as well on above
</span><br>
<span class="quotelev1">&gt; instance, unless it's for negative testing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; gurhan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/18/07, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Attached is the requested info.  There's not much here, though...it
</span><br>
<span class="quotelev2">&gt; &gt; dies pretty early in.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --Jim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/17/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Oct 17, 2007, at 12:35 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; checking if Fortran 90 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; checking size of Fortran 90 LOGICAL... ./configure: line 34070:  7262
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Segmentation fault      ./conftest 1&gt;&amp;5 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; configure: error: Could not determine size of LOGICAL
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Awesome!  It looks like gfortran itself is seg faulting.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can you send all the information listed on the getting help page?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That will help confirm/deny whether it's gfortran itself that is seg
</span><br>
<span class="quotelev3">&gt; &gt; &gt; faulting.  If it's gfortran that's seg faulting, there's not much
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that Open MPI can do...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Previous message:</strong> <a href="4256.php">Michael: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>In reply to:</strong> <a href="4251.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>Reply:</strong> <a href="4258.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
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
