<?
$subject_val = "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 17:12:08 2011" -->
<!-- isoreceived="20110419211208" -->
<!-- sent="Tue, 19 Apr 2011 14:12:03 -0700" -->
<!-- isosent="20110419211203" -->
<!-- name="Sergiy Bubin" -->
<!-- email="sergb77_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04" -->
<!-- id="col110-w1856F461F31BC726B97606AE900_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AF29575F-B5E0-42A9-B8B1-87FC239443BE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04<br>
<strong>From:</strong> Sergiy Bubin (<em>sergb77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 17:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16292.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16290.php">Tim Prince: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16289.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16290.php">Tim Prince: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great! Everything has compiled fine. Thank you very much for your assistance! I would have not known what to do had I been on my own. 
<br>
<p>Also, the -I option does work. It was my mistake, I typed CPPFLAGS=-I/usr/include/x86_64-linux-gnu/asm (note &quot;/asm&quot; in the end) when I did it first time, which was wrong.
<br>
<p>Thanks again,
<br>
Sergiy
<br>
<p><p>----------------------------------------
<br>
<span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 19 Apr 2011 14:39:31 -0600
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2011, at 2:24 PM, Sergiy Bubin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the suggestion. I have figured (by googling around and comparing the content of asm directories) that Ubuntu 11.04 has some difference in the location of /usr/include/asm/. It appears that now that whole directory is located at /usr/include/x86_64-linux-gnu/asm/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yick!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to use -I but it did not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Strange. CPPFLAGS=-I/usr/include/x86_64-linux-gnu on the configure line didn't work??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making a symbolic link
</span><br>
<span class="quotelev2">&gt; &gt; ln -s /usr/include/x86_64-linux-gnu/asm /usr/include/asm
</span><br>
<span class="quotelev2">&gt; &gt; did help to move things forward.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But now I got another issue. After compiling for a while it gives me the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like VampirTrace may not support 11.04 yet. Just add --enable-contrib-no-build=vt to your configure line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[7]: Entering directory `/home2/bubin/Software/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev2">&gt; &gt; icpc -DHAVE_CONFIG_H -I. -I../../.. -O3 -DNDEBUG -finline-functions -pthread -MT handler.o -MD -MP -MF .deps/handler.Tpo -c -o handler.o handler.cc
</span><br>
<span class="quotelev2">&gt; &gt; mv -f .deps/handler.Tpo .deps/handler.Po
</span><br>
<span class="quotelev2">&gt; &gt; icpc -DHAVE_CONFIG_H -I. -I../../.. -O3 -DNDEBUG -finline-functions -pthread -MT ompragma.o -MD -MP -MF .deps/ompragma.Tpo -c -o ompragma.o ompragma.cc
</span><br>
<span class="quotelev2">&gt; &gt; mv -f .deps/ompragma.Tpo .deps/ompragma.Po
</span><br>
<span class="quotelev2">&gt; &gt; icpc -DHAVE_CONFIG_H -I. -I../../.. -O3 -DNDEBUG -finline-functions -pthread -MT ompragma_c.o -MD -MP -MF .deps/ompragma_c.Tpo -c -o ompragma_c.o ompragma_c.cc
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(64): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt; { return { __mask }; }
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(94): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt; { return { __mask }; }
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(125): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt; { return { __base }; }
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(193): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt; { return { __n }; }
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(223): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt; { return { __n }; }
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; /usr/include/c++/4.5/iomanip(163): error: expected an expression
</span><br>
<span class="quotelev2">&gt; &gt; { return { __c }; }
</span><br>
<span class="quotelev2">&gt; &gt; ^
</span><br>
<span class="quotelev2">&gt; &gt; compilation aborted for ompragma_c.cc (code 2)
</span><br>
<span class="quotelev2">&gt; &gt; make[7]: *** [ompragma_c.o] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[7]: Leaving directory `/home2/bubin/Software/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari/tool'
</span><br>
<span class="quotelev2">&gt; &gt; make[6]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[6]: Leaving directory `/home2/bubin/Software/openmpi-1.4.3/ompi/contrib/vt/vt/tools/opari'
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: Leaving directory `/home2/bubin/Software/openmpi-1.4.3/ompi/contrib/vt/vt/tools'
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: Leaving directory `/home2/bubin/Software/openmpi-1.4.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory `/home2/bubin/Software/openmpi-1.4.3/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/home2/bubin/Software/openmpi-1.4.3/ompi/contrib/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/home2/bubin/Software/openmpi-1.4.3/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not sure how to deal with that. Any advice is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sergiy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Tue, 19 Apr 2011 11:35:48 -0600
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nothing was attached, but I doubt they would help anyway. This looks like a missing header file in Ubuntu, or else one that got moved and needs a different path.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Where is asm/errno.h, and how was it included in /usr/include/linux/errno.h? Best I can figure is it got put in some non-standard place, and you'll need to add a -I to your CPPFLAGS to find it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 19, 2011, at 10:52 AM, Sergiy Bubin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am trying to compile OpenMPI 1.4.3 with Intel compilers (version 12.0 update 2) on my new computer (Ubuntu 11.04 beta2). While running ./configure script seems to be fine, make all generates an error almost at the very beginning (see the attached output_make_all.txt file). For completeness I am also attaching configure.log file.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am not sure what that error means:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[3]: Entering directory `/home2/bubin/Software/openmpi-1.4.3/opal/libltdl'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /bin/bash ./libtool --tag=CC --mode=compile icc -DHAVE_CONFIG_H -I. -DLT_CONFIG_H='' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -fvisibility=hidden -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c -o dlopen.lo `test -f 'loaders/dlopen.c' || echo './'`loaders/dlopen.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; libtool: compile: icc -DHAVE_CONFIG_H -I. &quot;-DLT_CONFIG_H=&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -fvisibility=hidden -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c loaders/dlopen.c -fPIC -DPIC -o .libs/dlopen.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /usr/include/linux/errno.h(4): catastrophic error: cannot open source file &quot;asm/errno.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have just tried to compile the same version of OpenMPI with Intel 12.0 on another machine running Ubuntu 9.10 and it went just fine. Also, I recently did it on two other systems running Ubuntu 10.04 and 10.10. Again, no problems we encountered. If anyone could shed some light on my issue that would be very much appreciated.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sergiy
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16292.php">Sergiy Bubin: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16290.php">Tim Prince: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>In reply to:</strong> <a href="16289.php">Ralph Castain: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16290.php">Tim Prince: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
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
