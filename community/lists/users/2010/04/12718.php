<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 19:25:23 2010" -->
<!-- isoreceived="20100420232523" -->
<!-- sent="Tue, 20 Apr 2010 19:25:18 -0400" -->
<!-- isosent="20100420232518" -->
<!-- name="Baowei Liu" -->
<!-- email="bliu520_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="u2ta5d7282e1004201625k1b39e494i808816e1f328544e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56E154E7-59F6-42B5-AD40-6E8F3AF72099_at_cisco.com" -->
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
<strong>From:</strong> Baowei Liu (<em>bliu520_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 19:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, Jeff. I'll try what you told me and let you know the result.
<br>
<p>On Tue, Apr 20, 2010 at 2:03 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 19, 2010, at 12:08 PM, Baowei Liu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Sorry I didn't give you such details in my first email. I tried what
</span><br>
<span class="quotelev1">&gt; you said--the tarball attached to this email includes the configure and make
</span><br>
<span class="quotelev1">&gt; output information:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/openmpi | tee config.out
</span><br>
<span class="quotelev2">&gt; &gt; sudo make all &gt; make.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same error appeared:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../../ompi/mca/coll/hierarch -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../../..
</span><br>
<span class="quotelev1">&gt; -I../../../.. -I../../../../../opal/include -I../../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../ompi/include -D_REENTRANT -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -fvisibility=hidden -MT coll_hierarch.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/coll_hierarch.Tpo -c
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/coll/hierarch/coll_hierarch.c  -fno-common -DPIC -o
</span><br>
<span class="quotelev1">&gt; .libs/coll_hierarch.o
</span><br>
<span class="quotelev2">&gt; &gt; as: more than one -arch option (not allowed, use cc(1) instead)
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [coll_hierarch.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I said, I tried to get rid of this error by setting &quot;-arch&quot; option
</span><br>
<span class="quotelev1">&gt; when configure, like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, ok, now I understand what you tried; thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above error message is a little puzzling because Open MPI is not
</span><br>
<span class="quotelev1">&gt; providing any -arch flags on the compile command line.  But it's the
</span><br>
<span class="quotelev1">&gt; assembler that is complaining (as).  Weird.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The source file where the problem is occuring isn't particularly special
</span><br>
<span class="quotelev1">&gt; (ompi/mca/coll/hierarch/coll_hiearch.c).  I can't imagine why it would cause
</span><br>
<span class="quotelev1">&gt; this issue. :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try copy-n-pasting the &quot;gcc ... .libs/coll_hierarch.o&quot; command line to a
</span><br>
<span class="quotelev1">&gt; shell and running it in the ompi/mca/coll/hierarch directory and see if you
</span><br>
<span class="quotelev1">&gt; can get it to run.  Try snipping out the -O3 and see if that helps. Try
</span><br>
<span class="quotelev1">&gt; removing -fvisibility, etc.  See if you can get it to go by selectively
</span><br>
<span class="quotelev1">&gt; removing command line flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than that, I'm out of ideas.  It sounds like it could be either a
</span><br>
<span class="quotelev1">&gt; compiler bug, or some kind of bad interaction between your different
</span><br>
<span class="quotelev1">&gt; compiler / assembler versions on your system...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12719.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/InstallingproblemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
