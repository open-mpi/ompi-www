<?
$subject_val = "Re: [OMPI users] Fwd: installation with two different compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 17:43:41 2009" -->
<!-- isoreceived="20091026214341" -->
<!-- sent="Mon, 26 Oct 2009 17:43:37 -0400" -->
<!-- isosent="20091026214337" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: installation with two different compilers" -->
<!-- id="E11AF9C6-DC94-420C-BA64-77A1FAA263D3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b87c422a0910230102y7364fb7fie88e3f88a64aa70f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: installation with two different compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 17:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10978.php">Jeff Squyres: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?"</a>
<li><strong>Previous message:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in answering.  More below.
<br>
<p><p>On Oct 23, 2009, at 4:02 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; I have also put the 1.3.3 version (gfortran) on the path:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #For openmpi-1.2.6 Intel compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
</span><br>
<span class="quotelev1">&gt;   export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/usr/local/lib&quot;
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;   export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #For openmpi-1.3.3 gnu (gfortran) compiled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;$LD_LIBRARY_PATH&quot; ] ; then
</span><br>
<span class="quotelev1">&gt;   export LD_LIBRARY_PATH=&quot;$LD_LIBRARY_PATH:/opt/lib&quot;
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;   export LD_LIBRARY_PATH=&quot;/opt/lib&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think you're going to run into issues with the above scheme.
<br>
<p>In particular, if you have both the 1.2.6 and 1.3.3 libraries in your  
<br>
LD_LIBRARY_PATH, then the *first* libmpi.so (etc.) is going to be used  
<br>
-- i.e., the 1.2.6 version.  This is just the way Linux works -- it  
<br>
can't know that you want the 2nd libmpi.so (or 3rd or 4th or ...); it  
<br>
always just takes the first matching library that it finds.
<br>
<p><span class="quotelev1">&gt; francesco_at_tya64:~$ $PATH
</span><br>
<span class="quotelev1">&gt; bash: /opt/etsf/bin:/usr/local/delphi_4.1.1:/opt/intel/cce/10.1.015/ 
</span><br>
<span class="quotelev1">&gt; bin:/opt/intel/fce/10.1.015/bin:/usr/local/bin/vmd:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; chimera/bin:/opt/etsf/bin:/usr/local/delphi_4.1.1:/opt/intel/cce/ 
</span><br>
<span class="quotelev1">&gt; 10.1.015/bin:/opt/intel/fce/10.1.015/bin:/usr/local/bin/vmd:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/chimera/bin:/opt/etsf/bin:/usr/local/delphi_4.1.1:/opt/intel/ 
</span><br>
<span class="quotelev1">&gt; cce/10.1.015/bin:/opt/intel/fce/10.1.015/bin:/usr/local/bin/vmd:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/chimera/bin:/usr/local/bin:/usr/bin:/bin:/usr/games:/home/ 
</span><br>
<span class="quotelev1">&gt; francesco/hole2/exe:/opt/bin:/usr/local/amber10/exe:/usr/local/dock6/ 
</span><br>
<span class="quotelev1">&gt; bin:/home/francesco/hole2/exe:/opt/bin:/usr/local/amber10/exe:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/dock6/bin:/home/francesco/hole2/exe:/opt/bin:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; amber10/exe:/usr/local/dock6/bin:
</span><br>
<span class="quotelev1">&gt; No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Note that typing &quot;$PATH&quot; at a shell prompt is not a valid command,  
<br>
which is why you're getting the error message.  I think you want &quot;echo  
<br>
$PATH&quot;.  Ditto for &quot;echo $LD_LIBRARY_PATH&quot;.
<br>
<p><span class="quotelev1">&gt; To get info, I have to command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /opt/bin/ompi_info
</span><br>
<span class="quotelev1">&gt; which reports correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi_info
</span><br>
<span class="quotelev1">&gt; reports about previous installation of 1.2.6 version (intel).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct.  There is deep mojo involved here; I can explain it all if  
<br>
you care, but the *easiest* solution is just to have one Open MPI in  
<br>
your PATH/LD_LIBRARY_PATH at a time.  A common mechanism that people  
<br>
use is a software package called &quot;modules&quot; that allows simple  
<br>
switching of your run-time environment.  For example:
<br>
<p>shell$ module load ompi/1.2.6
<br>
shell$ ompi_info
<br>
...shows the correct output for 1.2.6
<br>
shell$ module unload ompi
<br>
shell$ module load ompi/1.3.3
<br>
shell$ ompi_info
<br>
...shows the correct output for 1.3.3
<br>
<p>Check out modules -- <a href="http://modules.sf.net/">http://modules.sf.net/</a> -- and see if that helps  
<br>
you.
<br>
<p>If you want further explanations, let me know, but it gets a bit  
<br>
complicated.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10978.php">Jeff Squyres: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?"</a>
<li><strong>Previous message:</strong> <a href="10976.php">Ashley Pittman: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
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
