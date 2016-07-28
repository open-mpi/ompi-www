<?
$subject_val = "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 10:45:04 2014" -->
<!-- isoreceived="20140128154504" -->
<!-- sent="Tue, 28 Jan 2014 22:44:46 +0700" -->
<!-- isosent="20140128154446" -->
<!-- name="Abdul Rahman Riza" -->
<!-- email="tenth.avatar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation aborted for Handler.cpp (code 2)" -->
<!-- id="06a901cf1c3f$e7a87cd0$b6f97670$_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAMvdAsJPPs3Y6Cn4XoAm5p7yY43xiyk2MOgFVaBcVK8NTuaobQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation aborted for Handler.cpp (code 2)<br>
<strong>From:</strong> Abdul Rahman Riza (<em>tenth.avatar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 10:44:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="23485.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Syed Ahsan Ali
<br>
Sent: Sunday, September 22, 2013 9:41 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] compilation aborted for Handler.cpp (code 2)
<br>
<p>Its ok Jeff.
<br>
I am not sure about other C++ codes and STL with icpc because it never
<br>
happened and I don't know anything about STL.(pardon my less knowledge).
<br>
What do you suggest in this case? installation of different version of
<br>
openmpi or intel compilers? or any other solution.
<br>
<p>On Fri, Sep 20, 2013 at 8:35 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay replying -- I actually replied on the original 
</span><br>
<span class="quotelev1">&gt; thread yesterday, but it got hung up in my outbox and I didn't notice 
</span><br>
<span class="quotelev1">&gt; that it didn't actually go out until a few moments ago.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm *guessing* that this is a problem with your local icpc installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you compile / run other C++ codes that use the STL with icpc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2013, at 6:59 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output of make V=1 is attached. Again same error. If intel compiler 
</span><br>
<span class="quotelev2">&gt;&gt; is using C++ headers from gfortran then how can we avoid this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 20, 2013 at 11:07 AM, Bert Wesarg 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Sep 20, 2013 at 4:49 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to compile openmpi-1.6.5 on fc16.x86_64 with icc and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ifort but getting the subject error. config.out and make.out is
</span><br>
attached.
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Following command was used for configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure CC=icc CXX=icpc FC=ifort F77=ifort F90=ifort 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/home/openmpi_gfortran -enable-mpi-f90 --enable-mpi-f77 |&amp; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tee config.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could you also run make with 'make V=1' and send the output. Anyway 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it looks like the intel compiler uses the C++ headers from GCC 4.6.3 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I don't know if this is supported.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please help/advise.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you and best regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev2">&gt;&gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Research &amp; Development Division
</span><br>
<span class="quotelev2">&gt;&gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev2">&gt;&gt; Phone # off  +92518358714
</span><br>
<span class="quotelev2">&gt;&gt; Cell # +923155145014
</span><br>
<span class="quotelev2">&gt;&gt; &lt;makeV.zip&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
--
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
---
Email ini bebas dari virus dan malware karena Proteksi avast! Antivirus aktif.
<a href="http://www.avast.com">http://www.avast.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="23485.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4rc2r30425 produces unexpected output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="23487.php">Tim Prince: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
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
