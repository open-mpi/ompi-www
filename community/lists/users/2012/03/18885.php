<?
$subject_val = "Re: [OMPI users] mpicc command not found - Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 09:29:37 2012" -->
<!-- isoreceived="20120330132937" -->
<!-- sent="Fri, 30 Mar 2012 08:29:32 -0500" -->
<!-- isosent="20120330132932" -->
<!-- name="Trent" -->
<!-- email="tjones146_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc command not found - Fedora" -->
<!-- id="BLU157-ds3672FE71EDBDC19AD9EE4F5490_at_phx.gbl" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Trent (<em>tjones146_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 09:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18886.php">tyler.balson_at_[hidden]: "[OMPI users] redirecting output"</a>
<li><strong>Previous message:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18883.php">Rohan Deshpande: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18872.php">Joshua Baker-LePain: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try &quot;yum search openmpi&quot; instead.
<br>
<p>&nbsp;
<br>
<p>Or as someone else suggested you download, compile, and install the source
<br>
and you could have already been on your way to using OpenMPI in a few
<br>
moments.
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Rohan Deshpande
<br>
Sent: Friday, March 30, 2012 7:39 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] mpicc command not found - Fedora
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
<p>I do not know how to use ortecc. 
<br>
<p>After looking at the details i found that yum install did not install
<br>
openmpi-devel package. 
<br>
<p>yum cannot find it either - yum search openmpi-devel says not match found.
<br>
<p>I am using Red Hat 6.2 and i686 processors. 
<br>
<p>which mpicc shows - 
<br>
&nbsp;&nbsp;
<br>
which: no mpicc in
<br>
(/usr/lib/qt-3.3/bin:/usr/local/ns-allinone/bin:/usr/local/ns-allinone/tcl8.
<br>
4.18/unix:/usr/local/ns-allinone/tk8.4.18/unix:/usr/local/cuda/cuda/bin:/usr
<br>
/local/bin:/usr/bin:/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/lib/openmpi/bi
<br>
n)
<br>
<p>rpmquery -l openmpi-devel   says package not installed
<br>
<p>What could be the possible solution? 
<br>
<p><p><p>On Fri, Mar 30, 2012 at 2:05 AM, Amit Ghadge &lt;amitg.aap_at_[hidden]&gt; wrote:
<br>
<p>You can try source packaged. Extract and run command ./configure
<br>
--prefix=usr/local , make all , make install after to compile any mpi
<br>
program by using mpicc 
<br>
<p>On 29-Mar-2012 7:26 PM, &quot;Jeffrey Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>I don't know exactly how Fedora packages Open MPI, but I've seen some
<br>
distributions separate Open MPI into a base package and a &quot;devel&quot; package.
<br>
And mpicc (and some friends) are split off into that &quot;devel&quot; package.
<br>
<p>The rationale is that you don't need mpicc (and friends) to *run* Open MPI
<br>
applications -- you only need mpicc (etc.) to *develop* Open MPI
<br>
applications.
<br>
<p>Poke around and see if you can find a devel-like Open MPI package in Fedora.
<br>
<p><p>On Mar 29, 2012, at 7:45 AM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed mpi successfully on fedora using yum install openmpi
</span><br>
openmpi-devel openmpi-libs
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also added /usr/lib/openmpi/bin to PATH and LD_LIBRARY_PATH
</span><br>
variable.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I try to complie my program using mpicc hello.c or
</span><br>
/usr/lib/openmpi/bin/mpicc hello.c I get error saying mpicc: command not
<br>
found
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the contents of /user/lib/openmpi/bin and there is no mpicc...
</span><br>
here is the screenshot
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The add/remove  programs show the installation details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;image.png&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried re installing but same thing happened.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone help me to solve this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ROHAN
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
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Best Regards,
ROHAN DESHPANDE  
 
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18886.php">tyler.balson_at_[hidden]: "[OMPI users] redirecting output"</a>
<li><strong>Previous message:</strong> <a href="18884.php">Constantinos Makassikis: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<li><strong>In reply to:</strong> <a href="18883.php">Rohan Deshpande: "Re: [OMPI users] mpicc command not found - Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18872.php">Joshua Baker-LePain: "Re: [OMPI users] mpicc command not found - Fedora"</a>
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
