<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 08:33:10 2007" -->
<!-- isoreceived="20070905123310" -->
<!-- sent="Wed, 5 Sep 2007 08:32:46 -0400" -->
<!-- isosent="20070905123246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] New MTT , MPICH2" -->
<!-- id="1AA4F83D-B56F-4AE4-B614-5E78CFE919DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6C2C79E72C305246B504CBA17B5500C9023144D1_at_mtlexch01.mtl.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-05 08:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0395.php">Tim Prins: "[MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0394.php">Shai Venter: "[MTT users] New MTT , MPICH2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2007, at 3:00 AM, Shai Venter wrote:
<br>
<p><span class="quotelev1">&gt; 1. If I wanted to compile and do some benchmarking and stress tests  
</span><br>
<span class="quotelev1">&gt; over MPICH2 (got their latest version download) can I accomplish  
</span><br>
<span class="quotelev1">&gt; that with MTT?
</span><br>
<p>I have just recently added support for several other MPI's, including  
<br>
MPICH2 (did you really mean MVAPICH2?  I added support for that as  
<br>
well) in a development branch that we are just about to merge into  
<br>
the trunk.  We'll then be deploying this new version out to the OMPI  
<br>
core testing group within a week or two.
<br>
<p>However, you're free to use this branch now.  Get a checkout of:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/svn/mtt/tmp/jms-new-parser">http://svn.open-mpi.org/svn/mtt/tmp/jms-new-parser</a>
<br>
<p>There is a sample/template INI file for the OMPI collective  
<br>
performance bake-off that we're going to undertake shortly -- it has  
<br>
template sections for lots of different MPI's.  Look at samples/ompi- 
<br>
core-perf-testing.ini.  You'll see some SLURM-specific stuff because  
<br>
that's what I run on my cluster, but adapting it to use a hostfile /  
<br>
hostlist would not be difficult (especially if you have a fixed/known  
<br>
list of hosts in advance).
<br>
<p>Note that the template INI file is a slightly different format than  
<br>
the INI files that are currently being used on the OMPI core nightly  
<br>
regression testing (meaning: we changed a few of the parsing rules).   
<br>
So don't start with a nightly regression testing INI file -- you must  
<br>
start from one of the samples on the jms-new-parser branch (every  
<br>
samples/*ini file on the jms-new-parser branch should be updated with  
<br>
the new formatting rules).
<br>
<p>Does this help?  Let me know if you have further questions.
<br>
<p><span class="quotelev1">&gt; 2. Not being an  &quot;OMPI core member&quot;,  how do I download latest MTT  
</span><br>
<span class="quotelev1">&gt; and updates?
</span><br>
<p>Actually, you are.  :)  Membership is by organization, not  
<br>
individuals, and Mellanox is a core Open MPI member.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0395.php">Tim Prins: "[MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0394.php">Shai Venter: "[MTT users] New MTT , MPICH2"</a>
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
