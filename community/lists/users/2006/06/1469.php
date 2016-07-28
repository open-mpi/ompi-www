<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 26 19:04:43 2006" -->
<!-- isoreceived="20060626230443" -->
<!-- sent="Mon, 26 Jun 2006 19:04:31 -0400" -->
<!-- isosent="20060626230431" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser error after v1.1 upgrade" -->
<!-- id="525882B0-2883-482E-8781-793418F771F6_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44A05F90.8050408_at_fluent.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-26 19:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1470.php">Peter Kjellström: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1472.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1472.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you have both OpenMPI 1.0.2 and 1.1 installed in separate areas  
<br>
there are a lot of different ways to mess that up.
<br>
<p>Offhand:
<br>
<p>Did you configure with --prefix pointed at each of the different areas.
<br>
<p>If both areas are in PATH or LD_LIBRARY_PATH or whatever environment  
<br>
variable your compiler uses than things could be interesting (Intel  
<br>
compiler using FPATH for include files).
<br>
<p>Michael
<br>
<p>On Jun 26, 2006, at 6:28 PM, Patrick Jessee wrote:
<br>
<p><span class="quotelev1">&gt; Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello.  Thanks for the response.  We do clean configures and makes  
</span><br>
<span class="quotelev1">&gt; under /tmp, and install in a completely separate area so I don't  
</span><br>
<span class="quotelev1">&gt; see how anything from 1.0.2 could be left over in the 1.1  
</span><br>
<span class="quotelev1">&gt; installation.  We aren't installing 1.1 over 1.0.2.   1.1 is  
</span><br>
<span class="quotelev1">&gt; configured, built, and installed in a completely different area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may have to properly uninstall OpenMPI 1.0.2 before  
</span><br>
<span class="quotelev2">&gt;&gt; installing  OpenMPI 1.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was an issue in the past.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would recommend you go into your OpenMPI 1.1 directory and type   
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make uninstall&quot;, then if you have it go into your OpenMPI 1.0.2   
</span><br>
<span class="quotelev2">&gt;&gt; directory and do the same.  If you don't have a directory with   
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.0.2 configured already then either rebuild OpenMPI 1.0.2  
</span><br>
<span class="quotelev2">&gt;&gt; or  go into /usr/local and identify all remaining OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; directories and  components and remove them.  Basically you should  
</span><br>
<span class="quotelev2">&gt;&gt; find directories  modified when you installed OpenMPI 1.1 (or when  
</span><br>
<span class="quotelev2">&gt;&gt; you uninstalled it)  and you may find components dated from when  
</span><br>
<span class="quotelev2">&gt;&gt; you installed OpenMPI 1.0.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	I recently upgraded to v1.1 of Open MPI and ran into a problem  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; head node that I can't seem to solve.  Upon running mpicc, mpiCC,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++, and so forth, I get an error like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;pj.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1470.php">Peter Kjellström: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>In reply to:</strong> <a href="1468.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1472.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1472.php">Patrick Jessee: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
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
