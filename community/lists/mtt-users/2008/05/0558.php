<?
$subject_val = "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 07:05:45 2008" -->
<!-- isoreceived="20080515110545" -->
<!-- sent="Thu, 15 May 2008 07:05:33 -0400" -->
<!-- isosent="20080515110533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple" -->
<!-- id="32567A29-F355-471A-9792-3EB4C4AFA6C6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF2A5952F3.B924FE3E-ON4825744A.001E983B-4825744A.001F7EF8_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 07:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0559.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2008, at 1:56 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for my delay. I deleted that line &quot;specify_module = Simple&quot; in  
</span><br>
<span class="quotelev1">&gt; ini file, and the require failure diappeared. Thanks for your support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Great!  I just filed <a href="https://svn.open-mpi.org/trac/mtt/ticket/356">https://svn.open-mpi.org/trac/mtt/ticket/356</a>  
<br>
because it seems like this is a simple enough error that we should  
<br>
really be able to detect it pretty easily and print out a reasonable  
<br>
error message.
<br>
<p><span class="quotelev1">&gt; Here is my MTT arguments this time:
</span><br>
<span class="quotelev1">&gt; client/mtt -d --force -f samples/ompi-core-template.ini --trial --no- 
</span><br>
<span class="quotelev1">&gt; section intel --no-section 1.1
</span><br>
<span class="quotelev1">&gt; The MTT result contains totally 22 failure. Not sure which of them  
</span><br>
<span class="quotelev1">&gt; are already known issues. I suppose the failed cases are one open  
</span><br>
<span class="quotelev1">&gt; MPI issue, instead of MTT issue. If that's the case, please correct  
</span><br>
<span class="quotelev1">&gt; me. I do not know which bug in <a href="https://svn.open-mpi.org/trac/ompi/report/6">https://svn.open-mpi.org/trac/ompi/report/6</a> 
</span><br>
<span class="quotelev1">&gt;  matches my mtt failure in running &quot;mpirun -np 2 --mca btl tcp,self  
</span><br>
<span class="quotelev1">&gt; --prefix /LTC/MTT/...&quot; listed below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any method to probe this failures for me? Or is there  
</span><br>
<span class="quotelev1">&gt; anyone to check all my MTT failed cases? I need one method to get  
</span><br>
<span class="quotelev1">&gt; which failed cases have been known and tracked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Unfortunately we do not have such an automated mechanism -- most of  
<br>
the existing known issues/failures are just known by the developers.   
<br>
That being said, if anyone has any clue how to implement such an  
<br>
automated system, I'm all ears.  We just could never figure out how to  
<br>
do it reliably because the stdout/stderr of known issue/failure X may  
<br>
be slightly different on any given machine.  :-\
<br>
<p>If you want to do a run in trial mode and send your results to the  
<br>
main OMPI MTT DB, if you could send us a permalink for your results,  
<br>
I'd be happy to look at them and help you classify the errors.
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
<li><strong>Next message:</strong> <a href="0559.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0557.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Reply:</strong> <a href="0559.php">Wen Hao Wang: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
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
