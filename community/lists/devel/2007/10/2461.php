<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 20:54:13 2007" -->
<!-- isoreceived="20071018005413" -->
<!-- sent="Wed, 17 Oct 2007 19:54:05 -0500" -->
<!-- isosent="20071018005405" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hybrid examples" -->
<!-- id="4716AEAD.6080704_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DC9BB4FF-D8C9-4A3A-BF7B-1DD421DFED6F_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 20:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2462.php">Tim Prins: "[OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Previous message:</strong> <a href="2460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>In reply to:</strong> <a href="2458.php">Jeff Squyres: "Re: [OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify, we had some conversation off-line with Jeff about that. 
<br>
You are eligible to access the ompi-tests directory, since you are a 
<br>
member of the group at UofDresden which signed the third party 
<br>
contribution, and thus is a member of Open MPI. For the sake of 
<br>
simplicity the svn accounts do not have automatically access to the 
<br>
svn-tests and svn-docs repository. For an existing svn account, it is as 
<br>
simple as sending an email to the svn repository maintainer ( Tim 
<br>
Mattox?) asking for that.
<br>
<p>In order to issue a *new* svn account, a member has to submit a new 
<br>
Appendix A of the third party contribution -- which is a simple document 
<br>
listing all persons working on ompi and thus requiring an svn account.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We've never made our ompi-tests SVN repository public mainly because  
</span><br>
<span class="quotelev1">&gt; it's mainly a collection of MPI benchmarks and tests that we've  
</span><br>
<span class="quotelev1">&gt; collected from around the net, but we've never looked into  
</span><br>
<span class="quotelev1">&gt; redistribution rights.  Hence, our SVN is not publicly readable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As the SVN URL implies, the thread tests came from Sun, so I think  
</span><br>
<span class="quotelev1">&gt; it's up to them as to whether they want them to be public or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2007, at 7:22 AM, Tobias Hilbrich wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a developer of MARMOT (MPI Checker) and currently working on  
</span><br>
<span class="quotelev2">&gt;&gt; support for
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE programs. Therefore I am looking for test  
</span><br>
<span class="quotelev2">&gt;&gt; examples which
</span><br>
<span class="quotelev2">&gt;&gt; are realy rare. I heard from Matthias M&#252;ller that you have a suit  
</span><br>
<span class="quotelev2">&gt;&gt; of test
</span><br>
<span class="quotelev2">&gt;&gt; programs that use MPI_THREAD_MULTIPLE. They should be located at:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/sun/threads">https://svn.open-mpi.org/svn/ompi-tests/trunk/sun/threads</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunatly I and also the other people here in Dresden have no  
</span><br>
<span class="quotelev2">&gt;&gt; access to
</span><br>
<span class="quotelev2">&gt;&gt; these examples. So it would be nice to get a login or to get these  
</span><br>
<span class="quotelev2">&gt;&gt; examples
</span><br>
<span class="quotelev2">&gt;&gt; in some other way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mfg Tobias Hilbrich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2462.php">Tim Prins: "[OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Previous message:</strong> <a href="2460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>In reply to:</strong> <a href="2458.php">Jeff Squyres: "Re: [OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
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
