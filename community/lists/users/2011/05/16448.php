<?
$subject_val = "Re: [OMPI users] cputype (7) does not match previous archive	members cputype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 13:27:53 2011" -->
<!-- isoreceived="20110504172753" -->
<!-- sent="Wed, 4 May 2011 17:27:47 +0000" -->
<!-- isosent="20110504172747" -->
<!-- name="Cizmas, Paul" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cputype (7) does not match previous archive	members cputype" -->
<!-- id="8792076078E3964AAA7D61CE7B7C78027FE193_at_aero-mbs02.aero-ad.tamu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CBD3BD79-355C-4BBF-8B39-BAAC97F23033_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cputype (7) does not match previous archive	members cputype<br>
<strong>From:</strong> Cizmas, Paul (<em>cizmas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 13:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<li><strong>Previous message:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>In reply to:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<li><strong>Reply:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added LDFLAGS=-m64, such that the command is now
<br>
<p>./configure --prefix=/opt/openmpi1.4.3GFm64 CC=/sw/bin/gcc-fsf-4.5 CFLAGS=-m64 CXX=/sw/bin/g++-fsf-4.5 CXXFLAGS=-m64 F77=gfortran FFLAGS=-m64 FC=gfortran FCFLAGS=-m64 LDFLAGS=-m64
<br>
<p>but it did not work.
<br>
<p>It still dies when I do 
<br>
<p>make all install 
<br>
<p>with the errors:
<br>
<p>+++++++++++++++++++++++++++++++++++++++
<br>
libtool: link: rm -fr  .libs/libevent.a
<br>
libtool: link: ar cru .libs/libevent.a .libs/event.o .libs/log.o .libs/evutil.o .libs/signal.o .libs/select.o 
<br>
/usr/bin/ranlib: archive member: .libs/libevent.a(signal.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
/usr/bin/ranlib: archive member: .libs/libevent.a(select.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
libtool: link: ranlib .libs/libevent.a
<br>
ranlib: archive member: .libs/libevent.a(signal.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
ranlib: archive member: .libs/libevent.a(select.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
<br>
make[3]: *** [libevent.la] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
+++++++++++++++++++++++++++++++++++++++
<br>
<p>Would it be possible that libevent.a is the problem?  Does libevent.a use LDFLAGS?
<br>
<p>Thank you,
<br>
<p>Paul
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeff Squyres [jsquyres_at_[hidden]]
<br>
Sent: Wednesday, May 04, 2011 11:43 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] cputype (7) does not match previous archive   members cputype
<br>
<p>On May 4, 2011, at 12:39 PM, Paul Cizmas wrote:
<br>
<p><span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi1.4.3GFm64 CC=/sw/bin/gcc-fsf-4.5 CFLAGS=-m64 CXX=/sw/bin/g++-fsf-4.5 CXXFLAGS=-m64 F77=gfortran FFLAGS=-m64 FC=gfortran FCFLAGS=-m64
</span><br>
<p>Oops -- sorry, you probably also need to include LDFLAGS=-m64, too (i.e., linker flags, vs. compiler flags).
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<li><strong>Previous message:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<li><strong>In reply to:</strong> <a href="16447.php">Jeff Squyres: "Re: [OMPI users] cputype (7) does not match previous archive members cputype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<li><strong>Reply:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
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
