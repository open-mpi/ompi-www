<?
$subject_val = "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 11:30:55 2009" -->
<!-- isoreceived="20090417153055" -->
<!-- sent="Fri, 17 Apr 2009 17:30:49 +0200" -->
<!-- isosent="20090417153049" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Intel compiler libraries (was: libnuma issue)" -->
<!-- id="b87c422a0904170830i496f7c4fud5bc4c3bfe31d5a7_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20090416160421.GB23471_at_DOME" -->
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
<strong>Subject:</strong> Re: [OMPI users] Intel compiler libraries (was: libnuma issue)<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-17 11:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8966.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8964.php">Min Zhu: "Re: [OMPI users] An mpirun question"</a>
<li><strong>In reply to:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 16, 2009 at 6:04 PM, Douglas Guptill &lt;douglas.guptill_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Thu, Apr 16, 2009 at 05:29:14PM +0200, Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 16, 2009 at 3:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Given my inexperience as system analyzer, I assume that I am messing
</span><br>
<span class="quotelev2">&gt;&gt; something. Unfortunately, i was unable to discover where I am messing.
</span><br>
<span class="quotelev2">&gt;&gt; An editor is waiting completion of calculations requested by a
</span><br>
<span class="quotelev2">&gt;&gt; referee, and I am unable to answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks a lot for all you have tried to put me on the right road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if the confusion stems from the requirement to &quot;source&quot; the
</span><br>
<span class="quotelev1">&gt; intel compiler setup files in (at least) two situations:
</span><br>
<span class="quotelev1">&gt; &#194;&#160;1. when compiling the (MPI) application
</span><br>
<span class="quotelev1">&gt; &#194;&#160;2. when running the (MPI) application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My solution to the second has been to create - as part of the build
</span><br>
<span class="quotelev1">&gt; process for my application - a &quot;run&quot; script for it. &#194;&#160;That script
</span><br>
<span class="quotelev1">&gt; sources the intel setup files, then runs the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is part of the script that runs my application:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; # If it is defined, source the intel setup script.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; if test &quot;x/opt/intel/Compiler/11.0/074/bin/ifortvars.sh intel64&quot; != x ; then
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;echo &quot;setup the intel compiler with &lt;/opt/intel/Compiler/11.0/074/bin/ifortvars.sh intel64&gt;&quot;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;. /opt/intel/Compiler/11.0/074/bin/ifortvars.sh intel64
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;if test -z $(echo ${LD_LIBRARY_PATH} | grep intel) ; then
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;echo &quot;Don't see intel in LD_LIBRARY_PATH=&lt;${LD_LIBRARY_PATH}&gt;&quot;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;echo &quot;you may have trouble&quot;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;fi
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; # run my program
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running only on the 4 cores of one machine, so this solution may
</span><br>
<span class="quotelev1">&gt; not work for MPI applications that run on multiple machines.
</span><br>
<p>I could try, however, where did you place the script? I can't (or do
<br>
not want) to souece system wide. Whichever I tried to source intels
<br>
non-interactively with debian did not work, while ~/.profile should
<br>
direct toward ~/.bashrc. I do not dare say &quot;bug&quot;, however, debian
<br>
people do not answer. In the past that sourcing worked well with
<br>
debian.
<br>
<p>thanks
<br>
francesco
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt; Douglas.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8966.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8964.php">Min Zhu: "Re: [OMPI users] An mpirun question"</a>
<li><strong>In reply to:</strong> <a href="8957.php">Douglas Guptill: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
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
