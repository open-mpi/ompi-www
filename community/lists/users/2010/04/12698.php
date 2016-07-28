<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 12:08:23 2010" -->
<!-- isoreceived="20100419160823" -->
<!-- sent="Mon, 19 Apr 2010 12:08:12 -0400" -->
<!-- isosent="20100419160812" -->
<!-- name="Baowei Liu" -->
<!-- email="bliu520_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="s2ga5d7282e1004190908pa71e0772vc1ab5bd4257c2452_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8FD4CDD6-B46B-47BF-A731-59FDE0F23449_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Baowei Liu (<em>bliu520_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 12:08:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12697.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12692.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 19, 2010 at 9:11 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 16, 2010, at 12:05 PM, Baowei Liu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your reply. Sorry I didn't make it clear..... When I run
</span><br>
<span class="quotelev1">&gt; config.guess of gcc, it gives me the x86_64 system. But when I run &quot;uname
</span><br>
<span class="quotelev1">&gt; -a&quot;, it says it's i386. I think that's the reason OMPI complains about &quot;more
</span><br>
<span class="quotelev1">&gt; than one -arch option (not allowed, use cc(1) instead)&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean?  I don't think you've mentioned that before...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;I thought it's in the make.out. But I just noticed the make error messages
<br>
wouldn't show in the make.out file.  I gave the information here:
<br>
<p>as: more than one -arch option (not allowed, use cc(1) instead)
<br>
make[2]: *** [coll_hierarch.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><span class="quotelev2">&gt; &gt; The new gcc can create executibals. I use it to compile my own c++
</span><br>
<span class="quotelev1">&gt; programs. And I don't need special flags. I need a higher version of gcc
</span><br>
<span class="quotelev1">&gt; than the default one just because I cannot build a package (QE:Quantum
</span><br>
<span class="quotelev1">&gt; Espresso) with the default gcc -- QE uses OMPI.  I can install OMPI with the
</span><br>
<span class="quotelev1">&gt; default gcc.  I tried this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. install OMPI with default gcc and OMPI works fine.
</span><br>
<span class="quotelev2">&gt; &gt; 2. install the new gcc and install the QE package, successfully.
</span><br>
<span class="quotelev2">&gt; &gt; 3. mpirun stops working with eorror&quot; cannot initialize&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the first time you've mentioned this, too.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Did you re-install Open MPI with the new gcc (and no -m flags, etc.)?  If
</span><br>
<span class="quotelev1">&gt; that doesn't work, please send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Sorry I didn't give you such details in my first email. I tried what you
<br>
said--the tarball attached to this email includes the configure and make
<br>
output information:
<br>
<p>./configure --prefix=/usr/local/openmpi | tee config.out
<br>
sudo make all &gt; make.out
<br>
<p>The same error appeared:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I.
<br>
-I../../../../../ompi/mca/coll/hierarch -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../../..
<br>
-I../../../.. -I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -D_REENTRANT -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -fvisibility=hidden -MT coll_hierarch.lo -MD -MP -MF
<br>
.deps/coll_hierarch.Tpo -c
<br>
../../../../../ompi/mca/coll/hierarch/coll_hierarch.c  -fno-common -DPIC -o
<br>
.libs/coll_hierarch.o
<br>
as: more than one -arch option (not allowed, use cc(1) instead)
<br>
make[2]: *** [coll_hierarch.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>As I said, I tried to get rid of this error by setting &quot;-arch&quot; option when
<br>
configure, like:
<br>
<p>./configure --prefix=/usr/local/openmpi  CFLAGS=&quot;-arch x86_64&quot;
<br>
CXXFLAGS=&quot;-arch x86_64&quot; FCFLAGS=&quot;-m64 -arch x86_64&quot; FFLAGS=&quot;-m64 -arch
<br>
x86_64&quot;
<br>
<p>&nbsp;But it complains this:
<br>
*** C compiler and preprocessor
<br>
checking for style of include used by make... GNU
<br>
checking for gcc... gcc
<br>
checking for C compiler default output file name...
<br>
configure: error: C compiler cannot create executables
<br>
<p>Thanks again for your help!
<br>
<p><p><p><span class="quotelev1">&gt; --
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12698/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12699.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12697.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12692.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem onMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12715.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problemonMacwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
