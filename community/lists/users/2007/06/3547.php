<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 25 12:12:31 2007" -->
<!-- isoreceived="20070625161231" -->
<!-- sent="Mon, 25 Jun 2007 09:12:27 -0700 (PDT)" -->
<!-- isosent="20070625161227" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel/openmpi" -->
<!-- id="920599.53024.qm_at_web58914.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D97B70CF7F72144881F66DFF4BD7A1202397E50_at_fmsmsx413.amr.corp.intel.com" -->
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
<strong>Date:</strong> 2007-06-25 12:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3548.php">Francesco Pietra: "[OMPI users] Fwd: Re:  intel/openmpi"</a>
<li><strong>Previous message:</strong> <a href="3546.php">Gabb, Henry: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>In reply to:</strong> <a href="3546.php">Gabb, Henry: "Re: [OMPI users] intel/openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Henry:
<br>
Thanks.
<br>
<p>The &quot;icc&quot; issue did not exist. The command line of ./configure was correct for
<br>
CXX respect. What was wrong was the lack of &quot;/bin&quot; before icpc.
<br>
<p>Then, both ./configure and make commands OK.
<br>
<p>Then, I tried
<br>
<p># checkinstall make install
<br>
<p>which aborted (checkinstall has been removed from amd64 etch; an attempt to
<br>
compile from the source from the developing testing = lenny did not succeed;
<br>
the libraries are defined differently in etch and lenny). Luckily the abortion
<br>
ended in &quot;Cleaning up OK&quot;.
<br>
<p>Then
<br>
<p># make install
<br>
<p>was probably successful. Unfortunately your email arrived too late so I had not
<br>
activated the compilers. My two tests were:
<br>
<p>$ ompi_info | grep libnuma
<br>
<p>which reported
<br>
<p>MCA maaffinity: libnuma (MCA v1.0, API v1.0 Component v.1.2.3)
<br>
<p>_____
<br>
<p>$  ompi_info | grep maaffinity
<br>
<p>which reported
<br>
<p>MCA maaffinity: first_use (MCA v1.0, API v1.0 Component v.1.2.3)
<br>
<p>MCA maaffinity: libnuma (MCA v1.0, API v1.0 Component v.1.2.3)
<br>
____________
<br>
<p>I remember to have seen indication how to check the installation of openmpi but
<br>
I am unable to trace them now.
<br>
<p>For any suggestion, thanks. Before installing Amber9 it would be fine to have
<br>
indications about openmpi (installed in /usr/local, I have /usr/local/bin in my
<br>
PATH and /usr/local/lib in my LD_LIBRARY_PATH)
<br>
<p>francesco
<br>
<p><p><p>--- &quot;Gabb, Henry&quot; &lt;henry.gabb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Francesco,
</span><br>
<span class="quotelev1">&gt; Try replacing 'icc' with 'icpc' in the CXX definition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, you shouldn't need the full path to the compilers. Are you
</span><br>
<span class="quotelev1">&gt; initializing the compilers before configuring openmpi? If not, I
</span><br>
<span class="quotelev1">&gt; strongly recommend that you run the ifortvars.{sh|csh} and
</span><br>
<span class="quotelev1">&gt; iccvars.{sh|csh} scripts before building openmpi. These scripts are in
</span><br>
<span class="quotelev1">&gt; the bin directories of the Intel compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Henry
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
<li><strong>Next message:</strong> <a href="3548.php">Francesco Pietra: "[OMPI users] Fwd: Re:  intel/openmpi"</a>
<li><strong>Previous message:</strong> <a href="3546.php">Gabb, Henry: "Re: [OMPI users] intel/openmpi"</a>
<li><strong>In reply to:</strong> <a href="3546.php">Gabb, Henry: "Re: [OMPI users] intel/openmpi"</a>
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
