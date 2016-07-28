<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 27 11:57:29 2006" -->
<!-- isoreceived="20060627155729" -->
<!-- sent="Tue, 27 Jun 2006 11:57:19 -0400" -->
<!-- isosent="20060627155719" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser error after v1.1 upgrade" -->
<!-- id="44A1555F.6090601_at_fluent.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="525882B0-2883-482E-8781-793418F771F6_at_ieee.org" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-27 11:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1473.php">Frank: "[OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1471.php">Dani&#235;l Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>In reply to:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt;If you have both OpenMPI 1.0.2 and 1.1 installed in separate areas  
</span><br>
<span class="quotelev1">&gt;there are a lot of different ways to mess that up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Offhand:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Did you configure with --prefix pointed at each of the different areas.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, --prefix was unique for each different area.
<br>
<p><span class="quotelev1">&gt;If both areas are in PATH or LD_LIBRARY_PATH or whatever environment  
</span><br>
<span class="quotelev1">&gt;variable your compiler uses than things could be interesting (Intel  
</span><br>
<span class="quotelev1">&gt;compiler using FPATH for include files).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Neither area was in the PATH, etc.
<br>
<p><span class="quotelev1">&gt;Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 26, 2006, at 6:28 PM, Patrick Jessee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Michael,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello.  Thanks for the response.  We do clean configures and makes  
</span><br>
<span class="quotelev2">&gt;&gt;under /tmp, and install in a completely separate area so I don't  
</span><br>
<span class="quotelev2">&gt;&gt;see how anything from 1.0.2 could be left over in the 1.1  
</span><br>
<span class="quotelev2">&gt;&gt;installation.  We aren't installing 1.1 over 1.0.2.   1.1 is  
</span><br>
<span class="quotelev2">&gt;&gt;configured, built, and installed in a completely different area.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;You may have to properly uninstall OpenMPI 1.0.2 before  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;installing  OpenMPI 1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This was an issue in the past.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I would recommend you go into your OpenMPI 1.1 directory and type   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&quot;make uninstall&quot;, then if you have it go into your OpenMPI 1.0.2   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;directory and do the same.  If you don't have a directory with   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OpenMPI 1.0.2 configured already then either rebuild OpenMPI 1.0.2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;or  go into /usr/local and identify all remaining OpenMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;directories and  components and remove them.  Basically you should  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;find directories  modified when you installed OpenMPI 1.1 (or when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;you uninstalled it)  and you may find components dated from when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;you installed OpenMPI 1.0.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;	I recently upgraded to v1.1 of Open MPI and ran into a problem  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;on my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;head node that I can't seem to solve.  Upon running mpicc, mpiCC,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;mpic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;++, and so forth, I get an error like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&lt;pj.vcf&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1473.php">Frank: "[OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1471.php">Dani&#235;l Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>In reply to:</strong> <a href="1469.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
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
