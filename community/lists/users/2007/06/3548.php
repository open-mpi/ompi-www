<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 02:44:30 2007" -->
<!-- isoreceived="20070626064430" -->
<!-- sent="Mon, 25 Jun 2007 23:44:21 -0700 (PDT)" -->
<!-- isosent="20070626064421" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Re:  intel/openmpi" -->
<!-- id="390916.16672.qm_at_web58913.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 02:44:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3549.php">Yuan Wan: "[OMPI users] How to use multi TCP network"</a>
<li><strong>Previous message:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Henry:
<br>
Contrary to what stated below about your suggestion as to activate the
<br>
compilers, I have traced back from my notes that I run both iccvars.sh and
<br>
ifortvars.sh at the time I installed the compilers (which was preceded by the
<br>
conversion of intel's rpm to deb by the way of alien). I did that investigation
<br>
to realize why the compilation of openmpi seems to be OK according to the test
<br>
they suggest.
<br>
<p>regards
<br>
francesco pietra
<br>
<p><p><p>--- Francesco Pietra &lt;chiendarret_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Date: Mon, 25 Jun 2007 09:12:27 -0700 (PDT)
</span><br>
<span class="quotelev1">&gt; From: Francesco Pietra &lt;chiendarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] intel/openmpi
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henry:
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;icc&quot; issue did not exist. The command line of ./configure was correct
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; CXX respect. What was wrong was the lack of &quot;/bin&quot; before icpc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, both ./configure and make commands OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I tried
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # checkinstall make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which aborted (checkinstall has been removed from amd64 etch; an attempt to
</span><br>
<span class="quotelev1">&gt; compile from the source from the developing testing = lenny did not succeed;
</span><br>
<span class="quotelev1">&gt; the libraries are defined differently in etch and lenny). Luckily the
</span><br>
<span class="quotelev1">&gt; abortion
</span><br>
<span class="quotelev1">&gt; ended in &quot;Cleaning up OK&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; was probably successful. Unfortunately your email arrived too late so I had
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; activated the compilers. My two tests were:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep libnuma
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which reported
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA maaffinity: libnuma (MCA v1.0, API v1.0 Component v.1.2.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _____
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $  ompi_info | grep maaffinity
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which reported
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA maaffinity: first_use (MCA v1.0, API v1.0 Component v.1.2.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA maaffinity: libnuma (MCA v1.0, API v1.0 Component v.1.2.3)
</span><br>
<span class="quotelev1">&gt; ____________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I remember to have seen indication how to check the installation of openmpi
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; I am unable to trace them now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For any suggestion, thanks. Before installing Amber9 it would be fine to have
</span><br>
<span class="quotelev1">&gt; indications about openmpi (installed in /usr/local, I have /usr/local/bin in
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; PATH and /usr/local/lib in my LD_LIBRARY_PATH)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; francesco
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- &quot;Gabb, Henry&quot; &lt;henry.gabb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Francesco,
</span><br>
<span class="quotelev2">&gt; &gt; Try replacing 'icc' with 'icpc' in the CXX definition.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, you shouldn't need the full path to the compilers. Are you
</span><br>
<span class="quotelev2">&gt; &gt; initializing the compilers before configuring openmpi? If not, I
</span><br>
<span class="quotelev2">&gt; &gt; strongly recommend that you run the ifortvars.{sh|csh} and
</span><br>
<span class="quotelev2">&gt; &gt; iccvars.{sh|csh} scripts before building openmpi. These scripts are in
</span><br>
<span class="quotelev2">&gt; &gt; the bin directories of the Intel compilers.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Henry
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
____________________________________________________________________________________
<br>
<span class="quotelev1">&gt; Take the Internet to Go: Yahoo!Go puts the Internet in your pocket: mail,
</span><br>
<span class="quotelev1">&gt; news, photos &amp; more. 
</span><br>
<span class="quotelev1">&gt; <a href="http://mobile.yahoo.com/go?refer=1GNXIC">http://mobile.yahoo.com/go?refer=1GNXIC</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________
<br>
Take the Internet to Go: Yahoo!Go puts the Internet in your pocket: mail, news, photos &amp; more. 
<br>
<a href="http://mobile.yahoo.com/go?refer=1GNXIC">http://mobile.yahoo.com/go?refer=1GNXIC</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3549.php">Yuan Wan: "[OMPI users] How to use multi TCP network"</a>
<li><strong>Previous message:</strong> <a href="3547.php">Francesco Pietra: "Re: [OMPI users] intel/openmpi"</a>
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
