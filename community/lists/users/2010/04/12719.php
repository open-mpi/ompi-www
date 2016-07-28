<?
$subject_val = "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 19:38:16 2010" -->
<!-- isoreceived="20100420233816" -->
<!-- sent="Tue, 20 Apr 2010 19:38:11 -0400" -->
<!-- isosent="20100420233811" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="DF4EC540-734D-4111-A663-CB28C021A9BB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="u2ta5d7282e1004201625k1b39e494i808816e1f328544e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 19:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12721.php">Baowei Liu: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12721.php">Baowei Liu: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2010, at 7:25 PM, Baowei Liu wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot, Jeff. I'll try what you told me and let you know the result.
</span><br>
<p>Someone else pointed out to me off-list that you're using &quot;sudo&quot; for make all -- do you need to?  Most people build as an unprivileged user and then only use &quot;sudo&quot; for &quot;make install&quot;.  I don't know if sudo's environment would be mucking you up so deep in the build, but it's worth trying without it...?
<br>
<p>Additionally, they pointed out that if you pass &quot;-v&quot; to CFLAGS (or just add it to the cut-n-paste of this particular command line), you should see all the commands that gcc is invoking under the covers.  That might be useful to see what's going on in this specific command line.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12720.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12721.php">Baowei Liu: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12721.php">Baowei Liu: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
