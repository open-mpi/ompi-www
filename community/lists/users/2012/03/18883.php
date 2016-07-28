<?
$subject_val = "Re: [OMPI users] mpicc command not found - Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 08:39:06 2012" -->
<!-- isoreceived="20120330123906" -->
<!-- sent="Fri, 30 Mar 2012 20:39:02 +0800" -->
<!-- isosent="20120330123902" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc command not found - Fedora" -->
<!-- id="CAFAE9jgTTV2EjjAOrzUozhJV9=OPbbBbp-ur7F2p5VPDnSrjKg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMALRjgx3EVhttj88+yR=LG-3TUYK88KBwzRC9JsSNvb3HZsjg_at_mail.gmail.com" -->
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
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 08:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>In reply to:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Reply:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Reply:</strong> <a href="18885.php">Trent: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I do not know how to use *ortecc*.
<br>
<p>After looking at the details i found that* yum install did not install
<br>
openmpi-devel package. *
<br>
<p>yum cannot find it either - *yum search openmpi-devel says not match found.*
<br>
<p>I am using* Red Hat 6.2 and i686 processors. *
<br>
<p>which mpicc shows -
<br>
<p>*which: no mpicc in
<br>
(/usr/lib/qt-3.3/bin:/usr/local/ns-allinone/bin:/usr/local/ns-allinone/tcl8.4.18/unix:/usr/local/ns-allinone/tk8.4.18/unix:/usr/local/cuda/cuda/bin:/usr/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lib/openmpi/bin)
<br>
*
<br>
<p>rpmquery -l openmpi-devel   *says package not installed*
<br>
<p>What could be the possible solution?
<br>
<p><p>On Fri, Mar 30, 2012 at 2:05 AM, Amit Ghadge &lt;amitg.aap_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You can try source packaged. Extract and run command ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=usr/local , make all , make install after to compile any mpi
</span><br>
<span class="quotelev1">&gt; program by using mpicc
</span><br>
<span class="quotelev1">&gt; On 29-Mar-2012 7:26 PM, &quot;Jeffrey Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know exactly how Fedora packages Open MPI, but I've seen some
</span><br>
<span class="quotelev2">&gt;&gt; distributions separate Open MPI into a base package and a &quot;devel&quot; package.
</span><br>
<span class="quotelev2">&gt;&gt;  And mpicc (and some friends) are split off into that &quot;devel&quot; package.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The rationale is that you don't need mpicc (and friends) to *run* Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI applications -- you only need mpicc (etc.) to *develop* Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Poke around and see if you can find a devel-like Open MPI package in
</span><br>
<span class="quotelev2">&gt;&gt; Fedora.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 29, 2012, at 7:45 AM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have installed mpi successfully on fedora using yum install openmpi
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-devel openmpi-libs
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have also added /usr/lib/openmpi/bin to PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; variable.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But when I try to complie my program using mpicc hello.c or
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/openmpi/bin/mpicc hello.c I get error saying mpicc: command not
</span><br>
<span class="quotelev2">&gt;&gt; found
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I checked the contents of /user/lib/openmpi/bin and there is no
</span><br>
<span class="quotelev2">&gt;&gt; mpicc... here is the screenshot
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;image.png&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The add/remove  programs show the installation details
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  &lt;image.png&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have tried re installing but same thing happened.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can someone help me to solve this issue?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ROHAN
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18883/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Previous message:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>In reply to:</strong> <a href="18874.php">Amit Ghadge: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Reply:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>Reply:</strong> <a href="18885.php">Trent: "Re: [OMPI users] mpicc command not found - Fedora"</a>
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
