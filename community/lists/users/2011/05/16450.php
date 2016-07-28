<?
$subject_val = "Re: [OMPI users] cputype (7) does not match previous	archive	members cputype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 13:53:00 2011" -->
<!-- isoreceived="20110504175300" -->
<!-- sent="Wed, 4 May 2011 17:52:54 +0000" -->
<!-- isosent="20110504175254" -->
<!-- name="Cizmas, Paul" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cputype (7) does not match previous	archive	members cputype" -->
<!-- id="8792076078E3964AAA7D61CE7B7C78027FE1E7_at_aero-mbs02.aero-ad.tamu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F527AF16-8D6C-484B-8FB6-3B7B42AD6FA2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] cputype (7) does not match previous	archive	members cputype<br>
<strong>From:</strong> Cizmas, Paul (<em>cizmas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 13:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16451.php">Mark Dixon: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>Previous message:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<li><strong>In reply to:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Life is much better after &quot;make clean&quot; :)
<br>
<p>Thank you,
<br>
<p>Paul
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Wednesday, May 04, 2011 12:29 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] cputype (7) does not match previous   archive members cputype
<br>
<p>Did you make clean first?
<br>
<p>configure won't clean out the prior installation, so you may be picking up stale libs.
<br>
<p>On May 4, 2011, at 11:27 AM, Cizmas, Paul wrote:
<br>
<p><span class="quotelev1">&gt; I added LDFLAGS=-m64, such that the command is now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi1.4.3GFm64 CC=/sw/bin/gcc-fsf-4.5 CFLAGS=-m64 CXX=/sw/bin/g++-fsf-4.5 CXXFLAGS=-m64 F77=gfortran FFLAGS=-m64 FC=gfortran FCFLAGS=-m64 LDFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it did not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It still dies when I do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt; libtool: link: rm -fr  .libs/libevent.a
</span><br>
<span class="quotelev1">&gt; libtool: link: ar cru .libs/libevent.a .libs/event.o .libs/log.o .libs/evutil.o .libs/signal.o .libs/select.o
</span><br>
<span class="quotelev1">&gt; /usr/bin/ranlib: archive member: .libs/libevent.a(signal.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
</span><br>
<span class="quotelev1">&gt; /usr/bin/ranlib: archive member: .libs/libevent.a(select.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
</span><br>
<span class="quotelev1">&gt; libtool: link: ranlib .libs/libevent.a
</span><br>
<span class="quotelev1">&gt; ranlib: archive member: .libs/libevent.a(signal.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
</span><br>
<span class="quotelev1">&gt; ranlib: archive member: .libs/libevent.a(select.o) cputype (7) does not match previous archive members cputype (16777223) (all members must match)
</span><br>
<span class="quotelev1">&gt; make[3]: *** [libevent.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it be possible that libevent.a is the problem?  Does libevent.a use LDFLAGS?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeff Squyres [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 04, 2011 11:43 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] cputype (7) does not match previous archive   members cputype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2011, at 12:39 PM, Paul Cizmas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi1.4.3GFm64 CC=/sw/bin/gcc-fsf-4.5 CFLAGS=-m64 CXX=/sw/bin/g++-fsf-4.5 CXXFLAGS=-m64 F77=gfortran FFLAGS=-m64 FC=gfortran FCFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops -- sorry, you probably also need to include LDFLAGS=-m64, too (i.e., linker flags, vs. compiler flags).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16451.php">Mark Dixon: "Re: [OMPI users] configure: mpi-threads disabled by default"</a>
<li><strong>Previous message:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
<li><strong>In reply to:</strong> <a href="16449.php">Ralph Castain: "Re: [OMPI users] cputype (7) does not match previous archive	members cputype"</a>
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
