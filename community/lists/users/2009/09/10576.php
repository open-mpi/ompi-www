<?
$subject_val = "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 23:54:36 2009" -->
<!-- isoreceived="20090905035436" -->
<!-- sent="Sat, 5 Sep 2009 06:54:30 +0300" -->
<!-- isosent="20090905035430" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux" -->
<!-- id="2AEDCA19-AA64-41BD-B644-8362AF10E4F4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c615a6650909040728q7f9e2ce5hb8a42649ba8c8da3_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 23:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
<li><strong>Previous message:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10571.php">Greg Fischer: "[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Reply:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you clarify what icpc11.1 is?  Is it a sym link to the icpc 11.1  
<br>
compiler, or is it a shell script that ends up invoking the icpc v11.1  
<br>
compiler?
<br>
<p>I ask because the compile line in question ends up with a complex  
<br>
quoting scheme that includes a token with spaces in it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri Sep  4 09:53:03 EDT 2009\&quot;&quot;
<br>
<p>If icpc11.1 is a shell script that ends up invoking the real icpc  
<br>
compiler underneath, I could see how the quoting might get screwed up  
<br>
and end up passing &quot;Sep&quot; (and following) as individual tokens rather  
<br>
than One Big Token (including quotes).
<br>
<p>That's just a first guess -- can you check to see if this is happening?
<br>
<p><p><p>On Sep 4, 2009, at 5:28 PM, Greg Fischer wrote:
<br>
<p><span class="quotelev1">&gt; I'm attempting to compile OpenMPI version 1.3.3 with Intel C/C++/ 
</span><br>
<span class="quotelev1">&gt; Fortran version 11.1.046.  Others have reported success using these  
</span><br>
<span class="quotelev1">&gt; compilers (<a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/68111/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/68111/</a> 
</span><br>
<span class="quotelev1">&gt; ).  The line where compilation fails is included at the end of this  
</span><br>
<span class="quotelev1">&gt; message.  I have also attached complete &quot;./configure&quot; and &quot;make&quot;  
</span><br>
<span class="quotelev1">&gt; outputs.  Does anyone have any insight as to what I'm doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; icpc11.1 -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/ 
</span><br>
<span class="quotelev1">&gt; plpa/src/libplpa  -DOMPI_CONFIGURE_USER=&quot;\&quot;fischega\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_CONFIGURE_HOST=&quot;\&quot;susedev1\&quot;&quot; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Fri  
</span><br>
<span class="quotelev1">&gt; Sep  4 09:53:03 EDT 2009\&quot;&quot; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -restrict -pthread -fvisibility=hidden\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3  
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -finline-functions -pthread\&quot;&quot; -DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;- 
</span><br>
<span class="quotelev1">&gt; I../../..  \&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic   
</span><br>
<span class="quotelev1">&gt; \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  \&quot;&quot; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/ 
</span><br>
<span class="quotelev1">&gt; usr/scripts/icc11.1\&quot;&quot; -DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/scripts/ 
</span><br>
<span class="quotelev1">&gt; icpc11.1\&quot;&quot; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/scripts/ifort11.1\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/scripts/ifort11.1\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..    -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -pthread -MT components.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; components.o components.cc &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  'Sep'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '4'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '09:53:03'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  'EDT'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '2009&quot;'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  'Sep'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '4'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '10:11:04'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  'EDT'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '2009&quot;'
</span><br>
<span class="quotelev1">&gt; icpc: command line warning #10159: invalid argument for option '- 
</span><br>
<span class="quotelev1">&gt; fvisibility'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev1">&gt; icpc: command line warning #10156: ignoring option '-p'; no argument  
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev1">&gt; icpc: error #10236: File not found:  '&quot;'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [components.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/fischega/src/openmpi-1.3.3/ompi/ 
</span><br>
<span class="quotelev1">&gt; tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10577.php">Jeff Squyres: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that workswithMPICH2)"</a>
<li><strong>Previous message:</strong> <a href="10575.php">Ben Mayer: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>In reply to:</strong> <a href="10571.php">Greg Fischer: "[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<li><strong>Reply:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
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
