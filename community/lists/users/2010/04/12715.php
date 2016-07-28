<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 14:04:01 2010" -->
<!-- isoreceived="20100420180401" -->
<!-- sent="Tue, 20 Apr 2010 14:03:57 -0400" -->
<!-- isosent="20100420180357" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="56E154E7-59F6-42B5-AD40-6E8F3AF72099_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="s2ga5d7282e1004190908pa71e0772vc1ab5bd4257c2452_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 14:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2010, at 12:08 PM, Baowei Liu wrote:
<br>
<p><span class="quotelev1">&gt;     Sorry I didn't give you such details in my first email. I tried what you said--the tarball attached to this email includes the configure and make output information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi | tee config.out
</span><br>
<span class="quotelev1">&gt; sudo make all &gt; make.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same error appeared:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../../ompi/mca/coll/hierarch -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include -D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -fvisibility=hidden -MT coll_hierarch.lo -MD -MP -MF .deps/coll_hierarch.Tpo -c ../../../../../ompi/mca/coll/hierarch/coll_hierarch.c  -fno-common -DPIC -o .libs/coll_hierarch.o
</span><br>
<span class="quotelev1">&gt; as: more than one -arch option (not allowed, use cc(1) instead)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [coll_hierarch.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I said, I tried to get rid of this error by setting &quot;-arch&quot; option when configure, like:
</span><br>
<p>Ah, ok, now I understand what you tried; thanks.
<br>
<p>The above error message is a little puzzling because Open MPI is not providing any -arch flags on the compile command line.  But it's the assembler that is complaining (as).  Weird.
<br>
<p>The source file where the problem is occuring isn't particularly special (ompi/mca/coll/hierarch/coll_hiearch.c).  I can't imagine why it would cause this issue. :-\
<br>
<p>Try copy-n-pasting the &quot;gcc ... .libs/coll_hierarch.o&quot; command line to a shell and running it in the ompi/mca/coll/hierarch directory and see if you can get it to run.  Try snipping out the -O3 and see if that helps. Try removing -fvisibility, etc.  See if you can get it to go by selectively removing command line flags.
<br>
<p>Other than that, I'm out of ideas.  It sounds like it could be either a compiler bug, or some kind of bad interaction between your different compiler / assembler versions on your system...?
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
<li><strong>Next message:</strong> <a href="12716.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12698.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12718.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
