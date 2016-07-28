<?
$subject_val = "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 13:27:59 2009" -->
<!-- isoreceived="20090905172759" -->
<!-- sent="Sat, 5 Sep 2009 13:27:48 -0400" -->
<!-- isosent="20090905172748" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux" -->
<!-- id="c615a6650909051027j37ed2a79uae71f17dea287617_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2AEDCA19-AA64-41BD-B644-8362AF10E4F4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-05 13:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10580.php">Jeff Brown: "[OMPI users] Fwd: vista+cygwin+openmpi"</a>
<li><strong>Previous message:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10630.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux"</a>
<li><strong>Reply:</strong> <a href="10630.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, that was it.
<br>
<p>The icpc11.1, ifort11.1, and icc11.1 scripts are included in the tar file
<br>
attached to my original email.  They set the PATH, LD_LIBRARY_PATH, and
<br>
INTEL_LICENSE_FILE correctly.  When I set the environment variables manually
<br>
and use the regular icpc, ifort, and icc commands, it works fine.  Good
<br>
catch!
<br>
<p>Thanks,
<br>
Greg
<br>
<p>On Fri, Sep 4, 2009 at 11:54 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you clarify what icpc11.1 is?  Is it a sym link to the icpc 11.1
</span><br>
<span class="quotelev1">&gt; compiler, or is it a shell script that ends up invoking the icpc v11.1
</span><br>
<span class="quotelev1">&gt; compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because the compile line in question ends up with a complex quoting
</span><br>
<span class="quotelev1">&gt; scheme that includes a token with spaces in it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    -DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri Sep  4 09:53:03 EDT 2009\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If icpc11.1 is a shell script that ends up invoking the real icpc compiler
</span><br>
<span class="quotelev1">&gt; underneath, I could see how the quoting might get screwed up and end up
</span><br>
<span class="quotelev1">&gt; passing &quot;Sep&quot; (and following) as individual tokens rather than One Big Token
</span><br>
<span class="quotelev1">&gt; (including quotes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's just a first guess -- can you check to see if this is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 5:28 PM, Greg Fischer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm attempting to compile OpenMPI version 1.3.3 with Intel C/C++/Fortran
</span><br>
<span class="quotelev2">&gt;&gt; version 11.1.046.  Others have reported success using these compilers (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/68111/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/68111/</a>).
</span><br>
<span class="quotelev2">&gt;&gt;  The line where compilation fails is included at the end of this message.  I
</span><br>
<span class="quotelev2">&gt;&gt; have also attached complete &quot;./configure&quot; and &quot;make&quot; outputs.  Does anyone
</span><br>
<span class="quotelev2">&gt;&gt; have any insight as to what I'm doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; icpc11.1 -DHAVE_CONFIG_H -I. -I../../../opal/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../orte/include -I../../../ompi/include
</span><br>
<span class="quotelev2">&gt;&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev2">&gt;&gt;  -DOMPI_CONFIGURE_USER=&quot;\&quot;fischega\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;susedev1\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri Sep  4 09:53:03 EDT 2009\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -restrict -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -fvisibility=hidden\&quot;&quot; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  \&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/scripts/icc11.1\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/scripts/icpc11.1\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/scripts/ifort11.1\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/scripts/ifort11.1\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..    -O3 -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -pthread -MT components.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; components.o components.cc &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  'Sep'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '4'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '09:53:03'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  'EDT'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '2009&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  'Sep'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '4'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '10:11:04'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  'EDT'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '2009&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: command line warning #10159: invalid argument for option
</span><br>
<span class="quotelev2">&gt;&gt; '-fvisibility'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: command line warning #10156: ignoring option '-p'; no argument
</span><br>
<span class="quotelev2">&gt;&gt; required
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [components.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/fischega/src/openmpi-1.3.3/ompi/tools/ompi_info'
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10580.php">Jeff Brown: "[OMPI users] Fwd: vista+cygwin+openmpi"</a>
<li><strong>Previous message:</strong> <a href="10578.php">St Druid: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10576.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10630.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux"</a>
<li><strong>Reply:</strong> <a href="10630.php">Jeff Squyres: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux"</a>
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
