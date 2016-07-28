<?
$subject_val = "Re: [OMPI users] Error running mpicc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 03:20:05 2016" -->
<!-- isoreceived="20160328072005" -->
<!-- sent="Mon, 28 Mar 2016 16:20:01 +0900" -->
<!-- isosent="20160328072001" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running mpicc" -->
<!-- id="56F8DB21.20308_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDhtk9XmaOnsk9HrFeQ2DziCzW5TTYjDunLRZ_JKgyYA3Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-28 03:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you do not use --disable-dlopen, then some components will depend on 
<br>
libnl, and some other will depend on libnl3. some might even depend on 
<br>
both libnl and libnl3.
<br>
so based on which component is loaded, you might or might not run into 
<br>
this issue.
<br>
on my centos 7 virtual machine, libnl-devel and libnl3-devel are installed.
<br>
everything seems fine except
<br>
ompi_info --all
<br>
that crashes.
<br>
<p>if you use --disable-dlopen, components are no more in their own 
<br>
library, but they are all &quot;merged&quot; into the same one. consequently, if 
<br>
some components require libnl and other require libnl3, the merged 
<br>
library will depend on both libnl and libnl3, so you will surely run 
<br>
into this kind of issues.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/28/2016 3:51 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your prompt response!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the answers to your questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ ldd `which mpicc` | grep libnl
</span><br>
<span class="quotelev1">&gt;     libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007f79b2d8a000)
</span><br>
<span class="quotelev1">&gt;     libnl-route-3.so.200 =&gt; /lib64/libnl-route-3.so.200 
</span><br>
<span class="quotelev1">&gt; (0x00007f79b1c44000)
</span><br>
<span class="quotelev1">&gt;     libnl-3.so.200 =&gt; /lib64/libnl-3.so.200 (0x00007f79b1a28000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So yes, mpicc does seem to need both libnl and libnl3. And this is 
</span><br>
<span class="quotelev1">&gt; even though libnl3-devel is NOT installed on my system:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could it be because of the --disable-dlopen switch to ./configure? The 
</span><br>
<span class="quotelev1">&gt; other two switches (--enable-debug and --enable-debug-symbols seem 
</span><br>
<span class="quotelev1">&gt; pretty harmless).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try your other suggestion and let you know the outcome shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 28, 2016 at 2:37 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does this happen only with master ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     what does
</span><br>
<span class="quotelev1">&gt;     ldd mpicc
</span><br>
<span class="quotelev1">&gt;     says ?
</span><br>
<span class="quotelev1">&gt;     does it require both libnl and libnl3 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     libnl3 is used by OpenMPI if libnl3-devel package is installed,
</span><br>
<span class="quotelev1">&gt;     and this is not the case on your system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     a possible root cause is third party libs use libnl3, and the
</span><br>
<span class="quotelev1">&gt;     reachable/netlink component
</span><br>
<span class="quotelev1">&gt;     tries to use libnl, in this case, installing libnl3-devel should
</span><br>
<span class="quotelev1">&gt;     fix your issue
</span><br>
<span class="quotelev1">&gt;     /* you will need to re-configure after that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     an other possible root cause is some third party libs use libnl
</span><br>
<span class="quotelev1">&gt;     and other use libnl3,
</span><br>
<span class="quotelev1">&gt;     and in this case, i am afraid there is no simple workaround.
</span><br>
<span class="quotelev1">&gt;     if installing libnl3-devel did not solve your issue, you can give
</span><br>
<span class="quotelev1">&gt;     a try to
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/pull/1014">https://github.com/open-mpi/ompi/pull/1014</a>
</span><br>
<span class="quotelev1">&gt;     at least, it will abort with an error message that states which
</span><br>
<span class="quotelev1">&gt;     lib is using libnl and which is using libnl3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i am afraid the only option is to manually disable some
</span><br>
<span class="quotelev1">&gt;     components, so only one flavor of lib nl is used.
</span><br>
<span class="quotelev1">&gt;     that can be achieved by adding a .opal_ignore empty file in the
</span><br>
<span class="quotelev1">&gt;     dir of the components you want to disable.
</span><br>
<span class="quotelev1">&gt;     /* you will need to rerun autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; after that */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 3/28/2016 3:16 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The system in question is a CentOS 7 box, that has been running
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI, both the master branch and the 1.10.2 release happily
</span><br>
<span class="quotelev2">&gt;&gt;     until now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Just now, in order to debug something, I recompiled with the
</span><br>
<span class="quotelev2">&gt;&gt;     following options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     $ ./configure --enable-debug --enable-debug-symbols --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The compilation and install was successful; however, mpicc now
</span><br>
<span class="quotelev2">&gt;&gt;     crashes like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [durga_at_smallMPI ~]$ mpicc -Wall -Wextra -o mpitest mpitest.c
</span><br>
<span class="quotelev2">&gt;&gt;     mpicc: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
</span><br>
<span class="quotelev2">&gt;&gt;     Aborted (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Searching the mailing archive, I found two posts that describe
</span><br>
<span class="quotelev2">&gt;&gt;     similar situations:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/community/lists/devel/2015/08/17812.php">https://www.open-mpi.org/community/lists/devel/2015/08/17812.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/11/28016.php">http://www.open-mpi.org/community/lists/users/2015/11/28016.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     However, the solution proposed in these, to disable verbs, is not
</span><br>
<span class="quotelev2">&gt;&gt;     acceptable to me for the following reasons: I am trying to
</span><br>
<span class="quotelev2">&gt;&gt;     implement a new BTL by reverse engineering the openib BTL. I am
</span><br>
<span class="quotelev2">&gt;&gt;     using a Qlogic HCA for this purpose. (Please note that I cannot
</span><br>
<span class="quotelev2">&gt;&gt;     use PSM as I am writing code for a BTL)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     As there any more acceptable solutions for this? Here are the
</span><br>
<span class="quotelev2">&gt;&gt;     list of nl libraries on my box:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [durga_at_smallMPI ~]$ sudo yum list installed | grep libnl
</span><br>
<span class="quotelev2">&gt;&gt;     libnl.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev2">&gt;&gt;     libnl-devel.x86_64 1.1.4-3.el7                     @anaconda
</span><br>
<span class="quotelev2">&gt;&gt;     libnl3.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev2">&gt;&gt;     libnl3-cli.x86_64 3.2.21-10.el7                   @base
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     and uninstalling libnl3 is not an option either: it seems yum 
</span><br>
<span class="quotelev2">&gt;&gt;     wants to uninstall around 100 odd other packages because of
</span><br>
<span class="quotelev2">&gt;&gt;     dependency which will essentially render the machine unusable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Please help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;     Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28855.php">http://www.open-mpi.org/community/lists/users/2016/03/28855.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28856.php">http://www.open-mpi.org/community/lists/users/2016/03/28856.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28857.php">http://www.open-mpi.org/community/lists/users/2016/03/28857.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>Previous message:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<li><strong>In reply to:</strong> <a href="28857.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28859.php">dpchoudh .: "Re: [OMPI users] Error running mpicc"</a>
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
