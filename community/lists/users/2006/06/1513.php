<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 07:50:13 2006" -->
<!-- isoreceived="20060630115013" -->
<!-- sent="Fri, 30 Jun 2006 07:49:57 -0400" -->
<!-- isosent="20060630114957" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] keyval parser error after v1.1 upgrade" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9E89_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] keyval parser error after v1.1 upgrade" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 07:49:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Previous message:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Maybe in reply to:</strong> <a href="1465.php">Benjamin Landsteiner: "[OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, good -- that's what I was assuming had happened.
<br>
<p>As Brian said, the stdin issue is not currently on our roadmap to fix in
<br>
the immediate future.  But I added it to our bug tracker as an
<br>
un-milestoned issue so that we don't forget about it
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/167">https://svn.open-mpi.org/trac/ompi/ticket/167</a>
<br>
<p>Thanks for the report! 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Patrick Jessee
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 29, 2006 5:12 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] keyval parser error after v1.1 upgrade
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion.  It's for the the 
</span><br>
<span class="quotelev1">&gt; &quot;mca_oob_tcp_accept&quot; thread.  
</span><br>
<span class="quotelev1">&gt; I mistakenly replied to the wrong message (&quot;keyval parser&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the &quot;mca_oob_tcp_accept&quot; thread, I have since found 
</span><br>
<span class="quotelev1">&gt; since found 
</span><br>
<span class="quotelev1">&gt; some more information on the problem (1.1 no longer works if stdin is 
</span><br>
<span class="quotelev1">&gt; closed; 1.0.2 was fine) and have reported this in another message 
</span><br>
<span class="quotelev1">&gt; (&quot;Openmpi 1.1: startup problem caused by file descriptor state&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if you need anymore information.  Thanks for following up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Patrick --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm a little confused about your response.  Are you replying to the
</span><br>
<span class="quotelev2">&gt; &gt;&quot;keyval parser&quot; thread (i.e., saying that you had the same problem as
</span><br>
<span class="quotelev2">&gt; &gt;Benjamin Landsteiner), or are you replying to the 
</span><br>
<span class="quotelev1">&gt; &quot;mca_oob_tcp_accept&quot;
</span><br>
<span class="quotelev2">&gt; &gt;thread?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt;From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Patrick Jessee
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Sent: Tuesday, June 27, 2006 11:57 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Subject: Re: [OMPI users] keyval parser error after v1.1 upgrade
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Michael Kluskens wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;If you have both OpenMPI 1.0.2 and 1.1 installed in 
</span><br>
<span class="quotelev1">&gt; separate areas  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;there are a lot of different ways to mess that up.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Offhand:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Did you configure with --prefix pointed at each of the 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;different areas.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Yes, --prefix was unique for each different area.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;If both areas are in PATH or LD_LIBRARY_PATH or whatever 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;environment  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;variable your compiler uses than things could be 
</span><br>
<span class="quotelev1">&gt; interesting (Intel  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;compiler using FPATH for include files).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Neither area was in the PATH, etc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Michael
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;On Jun 26, 2006, at 6:28 PM, Patrick Jessee wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Michael,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Hello.  Thanks for the response.  We do clean configures 
</span><br>
<span class="quotelev1">&gt; and makes  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;under /tmp, and install in a completely separate area so I don't  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;see how anything from 1.0.2 could be left over in the 1.1  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;installation.  We aren't installing 1.1 over 1.0.2.   1.1 is  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;configured, built, and installed in a completely different area.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-Patrick
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;You may have to properly uninstall OpenMPI 1.0.2 before  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;installing  OpenMPI 1.1
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;This was an issue in the past.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;I would recommend you go into your OpenMPI 1.1 directory 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;and type   
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&quot;make uninstall&quot;, then if you have it go into your 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.0.2   
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;directory and do the same.  If you don't have a directory with   
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;OpenMPI 1.0.2 configured already then either rebuild 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;OpenMPI 1.0.2  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;or  go into /usr/local and identify all remaining OpenMPI  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;directories and  components and remove them.  Basically 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;you should  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;find directories  modified when you installed OpenMPI 1.1 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;(or when  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;you uninstalled it)  and you may find components dated 
</span><br>
<span class="quotelev1">&gt; from when  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;you installed OpenMPI 1.0.2.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;Michael
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;On Jun 26, 2006, at 4:34 PM, Benjamin Landsteiner wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;Hello all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;	I recently upgraded to v1.1 of Open MPI and ran 
</span><br>
<span class="quotelev1">&gt; into a problem  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;on my
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;head node that I can't seem to solve.  Upon running 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mpicc, mpiCC,  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;mpic
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;++, and so forth, I get an error like this:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&lt;pj.vcf&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1514.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMpi 1.1 and Torque 2.1.1"</a>
<li><strong>Previous message:</strong> <a href="1512.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Maybe in reply to:</strong> <a href="1465.php">Benjamin Landsteiner: "[OMPI users] keyval parser error after v1.1 upgrade"</a>
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
