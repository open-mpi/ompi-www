<?
$subject_val = "Re: [OMPI users] mpicc command not found - Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 09:17:15 2012" -->
<!-- isoreceived="20120330131715" -->
<!-- sent="Fri, 30 Mar 2012 15:17:10 +0200" -->
<!-- isosent="20120330131710" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc command not found - Fedora" -->
<!-- id="CAN601uMVQ2e7AsVduv=EoEYqKB51vrdSUGZk3_LenJ9UMTceQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFAE9jgTTV2EjjAOrzUozhJV9=OPbbBbp-ur7F2p5VPDnSrjKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpicc command not found - Fedora<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 09:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18885.php">Trent: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18883.php">Rohan Deshpande: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18883.php">Rohan Deshpande: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18885.php">Trent: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 30, 2012 at 2:39 PM, Rohan Deshpande &lt;rohand87_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know how to use *ortecc*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
The same way as mpicc. Actually on my machine they both are symlinks to
<br>
&quot;opal_wrapper&quot;.
<br>
Your second screenshot suggests orte* commands have been installed.
<br>
<p><p><span class="quotelev1">&gt; After looking at the details i found that* yum install did not install
</span><br>
<span class="quotelev1">&gt; openmpi-devel package. *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yum cannot find it either - *yum search openmpi-devel says not match
</span><br>
<span class="quotelev1">&gt; found.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using* Red Hat 6.2 and i686 processors. *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; which mpicc shows -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *which: no mpicc in
</span><br>
<span class="quotelev1">&gt; (/usr/lib/qt-3.3/bin:/usr/local/ns-allinone/bin:/usr/local/ns-allinone/tcl8.4.18/unix:/usr/local/ns-allinone/tk8.4.18/unix:/usr/local/cuda/cuda/bin:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lib/openmpi/bin)
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmquery -l openmpi-devel   *says package not installed*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the possible solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>1) If ortecc is indeed present you can test it.
<br>
If it works you may create manually some symlinks of your own:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s /path1/ortecc /path2/mpicc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s /path1/orterun /path2/mpirun
<br>
where path2 is in your PATH
<br>
Maybe the fastest ... but not the cleanest :-)
<br>
<p>2) Fix the red hat package ...
<br>
May take some time ...
<br>
<p>3) As Amit suggested earlier you can also download OpenMPI's source,
<br>
compile and install it !
<br>
<p><pre>
--
Constantinos
&gt;
&gt; On Fri, Mar 30, 2012 at 2:05 AM, Amit Ghadge &lt;amitg.aap_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; You can try source packaged. Extract and run command ./configure
&gt;&gt; --prefix=usr/local , make all , make install after to compile any mpi
&gt;&gt; program by using mpicc
&gt;&gt;  On 29-Mar-2012 7:26 PM, &quot;Jeffrey Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; I don't know exactly how Fedora packages Open MPI, but I've seen some
&gt;&gt;&gt; distributions separate Open MPI into a base package and a &quot;devel&quot; package.
&gt;&gt;&gt;  And mpicc (and some friends) are split off into that &quot;devel&quot; package.
&gt;&gt;&gt;
&gt;&gt;&gt; The rationale is that you don't need mpicc (and friends) to *run* Open
&gt;&gt;&gt; MPI applications -- you only need mpicc (etc.) to *develop* Open MPI
&gt;&gt;&gt; applications.
&gt;&gt;&gt;
&gt;&gt;&gt; Poke around and see if you can find a devel-like Open MPI package in
&gt;&gt;&gt; Fedora.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Mar 29, 2012, at 7:45 AM, Rohan Deshpande wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; &gt; Hi,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I have installed mpi successfully on fedora using yum install openmpi
&gt;&gt;&gt; openmpi-devel openmpi-libs
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I have also added /usr/lib/openmpi/bin to PATH and LD_LIBRARY_PATH
&gt;&gt;&gt; variable.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; But when I try to complie my program using mpicc hello.c or
&gt;&gt;&gt; /usr/lib/openmpi/bin/mpicc hello.c I get error saying mpicc: command not
&gt;&gt;&gt; found
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I checked the contents of /user/lib/openmpi/bin and there is no
&gt;&gt;&gt; mpicc... here is the screenshot
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;     &lt;image.png&gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; The add/remove  programs show the installation details
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;  &lt;image.png&gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I have tried re installing but same thing happened.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Can someone help me to solve this issue?
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Thanks
&gt;&gt;&gt; &gt; --
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Best Regards,
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; ROHAN
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; _______________________________________________
&gt;&gt;&gt; &gt; users mailing list
&gt;&gt;&gt; &gt; users_at_[hidden]
&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt; For corporate legal information go to:
&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
&gt;
&gt; --
&gt;
&gt; Best Regards,
&gt;
&gt; ROHAN DESHPANDE
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18885.php">Trent: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18883.php">Rohan Deshpande: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18883.php">Rohan Deshpande: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18885.php">Trent: "Re: [OMPI users] mpicc command not found - Fedora"</a>
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
