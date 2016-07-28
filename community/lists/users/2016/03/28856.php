<?
$subject_val = "Re: [OMPI users] Error running mpicc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 02:37:52 2016" -->
<!-- isoreceived="20160328063752" -->
<!-- sent="Mon, 28 Mar 2016 15:37:48 +0900" -->
<!-- isosent="20160328063748" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running mpicc" -->
<!-- id="56F8D13C.3000703_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDjJ9vwTuWgt-W2+LKyapE1exGRYmqo9AyTdkPhjCMOuXA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error running mpicc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-28 02:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28855.php">dpchoudh .: "[OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28855.php">dpchoudh .: "[OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does this happen only with master ?
<br>
<p>what does
<br>
ldd mpicc
<br>
says ?
<br>
does it require both libnl and libnl3 ?
<br>
<p>libnl3 is used by OpenMPI if libnl3-devel package is installed,
<br>
and this is not the case on your system
<br>
<p>a possible root cause is third party libs use libnl3, and the 
<br>
reachable/netlink component
<br>
tries to use libnl, in this case, installing libnl3-devel should fix 
<br>
your issue
<br>
/* you will need to re-configure after that */
<br>
<p>an other possible root cause is some third party libs use libnl and 
<br>
other use libnl3,
<br>
and in this case, i am afraid there is no simple workaround.
<br>
if installing libnl3-devel did not solve your issue, you can give a try to
<br>
<a href="https://github.com/open-mpi/ompi/pull/1014">https://github.com/open-mpi/ompi/pull/1014</a>
<br>
at least, it will abort with an error message that states which lib is 
<br>
using libnl and which is using libnl3
<br>
<p>i am afraid the only option is to manually disable some components, so 
<br>
only one flavor of lib nl is used.
<br>
that can be achieved by adding a .opal_ignore empty file in the dir of 
<br>
the components you want to disable.
<br>
/* you will need to rerun autogen.pl after that */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/28/2016 3:16 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The system in question is a CentOS 7 box, that has been running 
</span><br>
<span class="quotelev1">&gt; OpenMPI, both the master branch and the 1.10.2 release happily until now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just now, in order to debug something, I recompiled with the following 
</span><br>
<span class="quotelev1">&gt; options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure --enable-debug --enable-debug-symbols --disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compilation and install was successful; however, mpicc now crashes 
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpicc -Wall -Wextra -o mpitest mpitest.c
</span><br>
<span class="quotelev1">&gt; mpicc: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
</span><br>
<span class="quotelev1">&gt; Aborted (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching the mailing archive, I found two posts that describe similar 
</span><br>
<span class="quotelev1">&gt; situations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2015/08/17812.php">https://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28016.php">http://www.open-mpi.org/community/lists/users/2015/11/28016.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the solution proposed in these, to disable verbs, is not 
</span><br>
<span class="quotelev1">&gt; acceptable to me for the following reasons: I am trying to implement a 
</span><br>
<span class="quotelev1">&gt; new BTL by reverse engineering the openib BTL. I am using a Qlogic HCA 
</span><br>
<span class="quotelev1">&gt; for this purpose. (Please note that I cannot use PSM as I am writing 
</span><br>
<span class="quotelev1">&gt; code for a BTL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As there any more acceptable solutions for this? Here are the list of 
</span><br>
<span class="quotelev1">&gt; nl libraries on my box:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ sudo yum list installed | grep libnl
</span><br>
<span class="quotelev1">&gt; libnl.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev1">&gt; libnl-devel.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev1">&gt; libnl3.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev1">&gt; libnl3-cli.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and uninstalling libnl3 is not an option either: it seems yum wants to 
</span><br>
<span class="quotelev1">&gt; uninstall around 100 odd other packages because of dependency which 
</span><br>
<span class="quotelev1">&gt; will essentially render the machine unusable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Please help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28855.php">http://www.open-mpi.org/community/lists/users/2016/03/28855.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28856/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28855.php">dpchoudh .: "[OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28855.php">dpchoudh .: "[OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Reply:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
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
