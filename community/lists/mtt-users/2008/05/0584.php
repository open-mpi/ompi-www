<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 04:11:47 2008" -->
<!-- isoreceived="20080523081147" -->
<!-- sent="Fri, 23 May 2008 16:22:45 +0800" -->
<!-- isosent="20080523082245" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="OF61BABC6A.7B5B94DC-ON48257452.002DD9F6-48257452.002CE7F9_at_cn.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F1338742-5DB7-452C-B4C1-F2585665EA5F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 04:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0583.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0570.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff:
<br>
<p>Thanks for your advice. With the password Brad sent, I found and downloaded
<br>
ibm directory of repository ompi-tests. But it seems the directory does not
<br>
contain enough files.
<br>
<p>[root_at_xblade08 ~]# ls /LTC/MPI/ompi_lamtests/
<br>
acinclude.m4  collective    config        datatype  environment  info
<br>
LICENSE      onesided  README     topology
<br>
autogen.sh    communicator  configure.ac  dynamic   group        io
<br>
Makefile.am  pt2pt     reporting
<br>
[root_at_xblade08 ~]# ls /LTC/MPI/lamtests-7.1.4
<br>
acinclude.m4  check.out   config.out     configure.in  Entering  in
<br>
laminfo.out  Makefile.in  others     topo
<br>
aclocal.m4    comm        config.status  directory     env       info
<br>
LICENSE      make.out     pt2pt      VERSION
<br>
ccl           config      configure      dtyp          errors    io
<br>
Makefile     Making       README
<br>
check         config.log  configure.bak  dynamic       group     lam
<br>
Makefile.am  onesided     reporting
<br>
<p>ompi_lamtests was got from openmpi subversion, while lamtests-7.1.4 from
<br>
lam-mpi.org. You can catch ompi_lamtests have less files than lamtests. At
<br>
least no configure file is available to configure and make. Any advice?
<br>
<p>Moveover, any update for my MTT execution result? Thanks again.
<br>
<p>Wen Hao Wang
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsquyres_at_cisco.c                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;om&gt;                                                        To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                  General user list for the MPI       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users-bounces         Testing Tool                        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@open-mpi.org             &lt;mtt-users_at_[hidden]&gt;            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008-05-20 20:11                                      Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [MTT users] MTT fail to require 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Test::Specify::Simple          
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General user list                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for the MPI                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Testing Tool                                                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;mtt-users_at_open-m                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pi.org&gt;                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<br>
<p><p>Right -- didn't you coordinate with Brad to get these for IBM...?
<br>
<p>If you are running the official Open MPI nightly regression testing,
<br>
you can have access to this repository.
<br>
<p><p>On May 20, 2008, at 8:13 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; But ompi-tests or ompitests also need user/password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_valiant wwh]# svn list <a href="http://svn.open-mpi.org/svn/ompitests">http://svn.open-mpi.org/svn/ompitests</a>
</span><br>
<span class="quotelev1">&gt; Authentication realm: &lt;<a href="http://svn.open-mpi.org:80">http://svn.open-mpi.org:80</a>&gt; Open MPI
</span><br>
<span class="quotelev1">&gt; Subversion repositories access
</span><br>
<span class="quotelev1">&gt; Password for 'root':
</span><br>
<span class="quotelev1">&gt; [root_at_valiant wwh]# svn list <a href="http://svn.open-mpi.org/svn/ompi-tests">http://svn.open-mpi.org/svn/ompi-tests</a>
</span><br>
<span class="quotelev1">&gt; Authentication realm: &lt;<a href="http://svn.open-mpi.org:80">http://svn.open-mpi.org:80</a>&gt; Open MPI
</span><br>
<span class="quotelev1">&gt; Subversion repositories access
</span><br>
<span class="quotelev1">&gt; Password for 'root':
</span><br>
<span class="quotelev1">&gt; Wen Hao Wang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: mtt-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 2008-05-20 19:32
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; General user list for the MPI Testing Tool &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; General user list for the MPI Testing Tool &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 20, 2008, at 1:12 AM, Wen Hao Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have rerun MTT with the arguments &quot;--verbose --force -f samples/
</span><br>
<span class="quotelev2">&gt; &gt; ompi-core-template.ini --no-section intel --no-section 1.1&quot;. Now I
</span><br>
<span class="quotelev2">&gt; &gt; can see my test results in the MTT database. The platform name is
</span><br>
<span class="quotelev2">&gt; &gt; ibm_beijing_rhel5.2. One &quot;Test build&quot; case and tens of &quot;Test run&quot;
</span><br>
<span class="quotelev2">&gt; &gt; cases are marked Fail. If you have time to check them, that would be
</span><br>
<span class="quotelev2">&gt; &gt; greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For lamtests you mentioned in lam mail list, I tried to check out
</span><br>
<span class="quotelev2">&gt; &gt; ompi and ibm respositories. ompi can be accessed but not has
</span><br>
<span class="quotelev2">&gt; &gt; lamtests. ibm can not be accessed without password.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not the ibm repository -- it's the ibm directory in the ompi-
</span><br>
<span class="quotelev1">&gt; tests repository. Sorry if that was not clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</pre>
<p>
<p><p>


<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0584/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0584/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0584/pic16211.gif" alt="pic16211.gif">
<!-- attachment="pic16211.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/mtt-users/att-0584/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0583.php">Ethan Mallove: "Re: [MTT users] Can not find my testing results in OMPI MTT DB"</a>
<li><strong>In reply to:</strong> <a href="0570.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0585.php">Jeff Squyres: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
