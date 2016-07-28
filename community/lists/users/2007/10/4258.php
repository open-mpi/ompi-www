<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 19 14:58:38 2007" -->
<!-- isoreceived="20071019185838" -->
<!-- sent="Fri, 19 Oct 2007 14:58:32 -0400" -->
<!-- isosent="20071019185832" -->
<!-- name="Gurhan" -->
<!-- email="gurhan.ozen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64" -->
<!-- id="5849f1820710191158ycbe48c5h84e2bfce7c9469ae_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="df8c8a6d0710190903q42d04f7u6186528d72d0f1ff_at_mail.gmail.com" -->
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
<strong>From:</strong> Gurhan (<em>gurhan.ozen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-19 14:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4259.php">Tony Sheh: "[OMPI users] xcode and ompi"</a>
<li><strong>Previous message:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/19/07, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I caught some of that above...I suspect rpm's build environment for
</span><br>
<span class="quotelev1">&gt; cross-platform building &quot;leaves much to be desired&quot;...At this point, I
</span><br>
<span class="quotelev1">&gt; was thinking my best option would be to set up a i386 box and build
</span><br>
<span class="quotelev1">&gt; the .i386 libs on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Multilib installations are not trivial. However this particular
<br>
issue is a trivial issue/oversight. I haven't checked the CentOS one,
<br>
but the RHEL spec file doesn't pass any FCFLAGS argument to the
<br>
configure file. So, edit your spec file and add
<br>
FCFLAGS=&quot;$RPM_OPT_FLAGS $XFLAGS&quot;
<br>
line in the configure script line and retry.
<br>
<p>You wouldn't need to do this on an i386 box, though if you can do it,
<br>
it'd be just fine. However if you are on hardware/time/resource
<br>
restraint and can't do it , you should be able to do this just fine on
<br>
your x86_64 machines, but you might have to install some i386
<br>
dependencies .
<br>
<p>thanks,
<br>
gurhan
<br>
<p><span class="quotelev1">&gt; I must say, I'm pretty disappointed in rpm, as the x86_64 platform
</span><br>
<span class="quotelev1">&gt; seems to &quot;require&quot; both 64 and 32 versions of its libs and devel
</span><br>
<span class="quotelev1">&gt; files.  Yet, on a x86_64 platform, it doesn't appear that the 32-bit
</span><br>
<span class="quotelev1">&gt; versions can be generated reliably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately for me, I need the binaries in rpm form, as this will be
</span><br>
<span class="quotelev1">&gt; &quot;mass-deployed&quot; to a ROCKs cluster, and the installer installs rpms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/18/07, Gurhan &lt;gurhan.ozen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; configure:33918: gcc -DNDEBUG -O2 -g -pipe -m32 -march=i386
</span><br>
<span class="quotelev2">&gt; &gt; -mtune=pentium4 -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev2">&gt; &gt; configure:33925: $? = 0
</span><br>
<span class="quotelev2">&gt; &gt; configure:33935: gfortran   conftestf.f90 conftest.o -o conftest
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: warning: i386 architecture of input file `conftest.o' is
</span><br>
<span class="quotelev2">&gt; &gt; incompatible with i386:x86-64 output
</span><br>
<span class="quotelev2">&gt; &gt; configure:33942: $? = 0
</span><br>
<span class="quotelev2">&gt; &gt; configure:33990: ./conftest
</span><br>
<span class="quotelev2">&gt; &gt; configure:33997: $? = 139
</span><br>
<span class="quotelev2">&gt; &gt; configure:34006: error: Could not determine size of LOGICAL
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this correct? We are feeding a 32-bit object file to be linked with
</span><br>
<span class="quotelev2">&gt; &gt; a 64-bit output executable file? When target is i386 shouldn't -m32
</span><br>
<span class="quotelev2">&gt; &gt; -march=i386 need to be passed on to gfortran as well on above
</span><br>
<span class="quotelev2">&gt; &gt; instance, unless it's for negative testing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; gurhan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/18/07, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Attached is the requested info.  There's not much here, though...it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; dies pretty early in.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --Jim
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 10/17/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Oct 17, 2007, at 12:35 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; checking if Fortran 90 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; checking size of Fortran 90 LOGICAL... ./configure: line 34070:  7262
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Segmentation fault      ./conftest 1&gt;&amp;5 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; configure: error: Could not determine size of LOGICAL
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Awesome!  It looks like gfortran itself is seg faulting.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Can you send all the information listed on the getting help page?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; That will help confirm/deny whether it's gfortran itself that is seg
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; faulting.  If it's gfortran that's seg faulting, there's not much
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; that Open MPI can do...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
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
<span class="quotelev3">&gt; &gt; &gt;
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
<li><strong>Next message:</strong> <a href="4259.php">Tony Sheh: "[OMPI users] xcode and ompi"</a>
<li><strong>Previous message:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4257.php">Jim Kusznir: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
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
