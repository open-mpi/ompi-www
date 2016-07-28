<?
$subject_val = "Re: [MTT users] mtt setup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 09:03:31 2013" -->
<!-- isoreceived="20130604130331" -->
<!-- sent="Tue, 4 Jun 2013 13:03:26 +0000" -->
<!-- isosent="20130604130326" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt setup" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6598F4_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51ADDB36.7070000_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [MTT users] mtt setup<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 09:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/07/0766.php">Jendrysik, Michael: "[MTT users] Request for Account"</a>
<li><strong>Previous message:</strong> <a href="0764.php">sethi: "[MTT users] mtt setup"</a>
<li><strong>In reply to:</strong> <a href="0764.php">sethi: "[MTT users] mtt setup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that HLRS had to run the mtt-relay when it was running MTT before.
<br>
<p>See client/mtt-relay, and <a href="https://svn.open-mpi.org/trac/mtt/changeset/623">https://svn.open-mpi.org/trac/mtt/changeset/623</a>.
<br>
<p><p><p>On Jun 4, 2013, at 5:19 AM, sethi &lt;sethi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;       I am setting up mtt testing in my institute. Clusters in my
</span><br>
<span class="quotelev1">&gt; institute don't have outbound access to mtt reporter link. So, I
</span><br>
<span class="quotelev1">&gt; download and run tests on the clusters. Then copy mtt-scratch to other
</span><br>
<span class="quotelev1">&gt; machine (with internet access) and run mtt with only reporter
</span><br>
<span class="quotelev1">&gt; configuration. Part of configuration is given below and complete file is
</span><br>
<span class="quotelev1">&gt; attached. Mtt with reporter configuration runs fine but results are not
</span><br>
<span class="quotelev1">&gt; uploaded. Can anybody, please give me a clue to resolve this issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; module = MTTDatabase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; mttdatabase_url = <a href="https://mtt.open-mpi.org/submit/">https://mtt.open-mpi.org/submit/</a>
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev1">&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = ****
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = ****
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev1">&gt; # cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = lakhi_HLRS_nehalem_nodes
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;reporter.ini&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/07/0766.php">Jendrysik, Michael: "[MTT users] Request for Account"</a>
<li><strong>Previous message:</strong> <a href="0764.php">sethi: "[MTT users] mtt setup"</a>
<li><strong>In reply to:</strong> <a href="0764.php">sethi: "[MTT users] mtt setup"</a>
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
