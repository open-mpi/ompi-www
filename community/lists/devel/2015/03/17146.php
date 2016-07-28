<?
$subject_val = "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 14:50:46 2015" -->
<!-- isoreceived="20150323185046" -->
<!-- sent="Mon, 23 Mar 2015 18:50:44 +0000" -->
<!-- isosent="20150323185044" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Configuration error with external hwloc" -->
<!-- id="ABD96EAE-2EA6-4B55-B914-4D83E9DFCF0B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF_-zRu4fL8wK9Pe=cajKJqp+xGHHogmcUEpity9mWYiPYOgVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Configuration error with external hwloc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-23 14:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17145.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17137.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry; I was traveling last week, and that makes a disaster out of my inbox.
<br>
<p><span class="quotelev1">&gt;From your first mail, it looks like configure died in the sub-configure script in the opal/mca/event/libevent2022/libevent directory:
</span><br>
<p><pre>
----
checking whether we are cross compiling... configure: error: in `/home/peter/openmpi/build/opal/mca/event/libevent2022/libevent':
configure: error: cannot run C compiled programs.
If you meant to cross compile, use `--host'.
See `config.log' for more details
configure: /bin/bash '../../../../../../ompi-master/opal/mca/event/libevent2022/libevent/configure' *failed* for opal/mca/event/libevent2022/libevent
configure: WARNING: Event library failed to configure
configure: error: Cannot continue
-----
The second email included a config.log from opal/mca/event/libevent2022/libevent, but that config.log file indicated that the sub-configure *succeeded*.
This seems to indicate that a) the two sets of output that you sent didn't match each other, and b) it looks like you had the sub configure script succeed.
Does this mean that you were able to get beyond this issue?  Has some other issue come up once you got beyond this issue?
&gt; On Mar 18, 2015, at 11:03 PM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt; wrote:
&gt; 
&gt; Here are the files you requested. I have run autogen.pl multiple times, and tried different versions of open mpi in addition to distribution versions, so I do not believe that is the problem. I assume I am having a problem with my compiler somehow, but I am not sure what it is.
&gt; Thanks for the help,
&gt; Peter
&gt; 
&gt; On Wed, Mar 18, 2015 at 6:36 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Moved this thread over from the users list...
&gt; 
&gt; It looks like this is a build from a git clone of master.
&gt; 
&gt; The specific failure occurred in the sub-configure script of libevent; could you send the additional two things:
&gt; 
&gt; 1. The opal/mca/event/libevent2022/libevent/config.log file (from the build tree)
&gt; 2. The output from running autogen.pl
&gt; 
&gt; 
&gt; 
&gt; &gt; On Mar 18, 2015, at 10:55 AM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt; wrote:
&gt; &gt;
&gt; &gt; Okay, the config.log and configure output are attached.
&gt; &gt;
&gt; &gt;
&gt; &gt; On Wed, Mar 18, 2015 at 11:38 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; &gt; Can you send all the info listed here:
&gt; &gt;
&gt; &gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; &gt; On Mar 17, 2015, at 6:30 PM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt; wrote:
&gt; &gt; &gt;
&gt; &gt; &gt; Hey all,
&gt; &gt; &gt; I am trying to compile Open MPI on a 32bit laptop running debian wheezy 7.8.0. When I
&gt; &gt; &gt; ../ompi-master/configure --prefix=$HOME/ompi-master/build --with-hwloc=$HOME/openmpi/hwloc/build --with-hwloc-libdir=$HOME/openmpi/hwloc/build/lib
&gt; &gt; &gt; I get the error code:
&gt; &gt; &gt; checking whether we are cross compiling... configure: error: in `/home/peter/openmpi/build/opal/mca/event/libevent2022/libevent':
&gt; &gt; &gt; configure: error: cannot run C compiled programs.
&gt; &gt; &gt; If you meant to cross compile, use `--host'.
&gt; &gt; &gt; See `config.log' for more details
&gt; &gt; &gt; configure: /bin/bash '../../../../../../ompi-master/opal/mca/event/libevent2022/libevent/configure' *failed* for opal/mca/event/libevent2022/libevent
&gt; &gt; &gt; configure: WARNING: Event library failed to configure
&gt; &gt; &gt; configure: error: Cannot continue
&gt; &gt; &gt; I have looked at a previous message in this mailing list, and I have a working compiler, so I do not believe that that is the problem here. Any help is appreciated.
&gt; &gt; &gt; Thanks,
&gt; &gt; &gt; Peter
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26491.php">http://www.open-mpi.org/community/lists/users/2015/03/26491.php</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26498.php">http://www.open-mpi.org/community/lists/users/2015/03/26498.php</a>
&gt; &gt;
&gt; &gt; &lt;output.tar.bz2&gt;_______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26499.php">http://www.open-mpi.org/community/lists/users/2015/03/26499.php</a>
&gt; 
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; &lt;output.tar.bz2&gt;
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="17145.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17137.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17147.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
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
