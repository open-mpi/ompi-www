<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 20 14:19:47 2007" -->
<!-- isoreceived="20070220191947" -->
<!-- sent="Tue, 20 Feb 2007 19:20:27 +0000" -->
<!-- isosent="20070220192027" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IBM XL compilers[Scanned]" -->
<!-- id="45DB49FB.4000508_at_ocf.co.uk" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="40B6A9F5-701C-46D4-85B9-CE534E48A944_at_open-mpi.org" -->
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
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-20 14:20:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Arif,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a problem with libtool and the IBM compilers and shared 
</span><br>
<span class="quotelev1">&gt; libraries. The easiest thing to do is to build static libraries 
</span><br>
<span class="quotelev1">&gt; instead by passing &quot;--disable-shared --enable-static&quot; to configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently unaware of any workarounds to make compiling shared 
</span><br>
<span class="quotelev1">&gt; libraries work with the IBM compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok, overcoming that, it fails with many errors, with 1.2b3/4, i'll post 
<br>
the details later
<br>
<p>with 1.1.4 I get a lot further and can't get past the following 
<br>
statemement, any ideas? I have tried deleting the backslashes (\), I 
<br>
have tried (\) before all the spaces, but still no luck. I have also 
<br>
tried taking the two variables for the date out, and still get  &quot; input 
<br>
file &quot; not found&quot;. after taking all the escape characters out \&quot; it 
<br>
works. Any way to avoid this?
<br>
<p><p>xlC_64 -DHAVE_CONFIG_H -I. 
<br>
-I../../../../openmpi-1.1.4/ompi/tools/ompi_info -I../../../opal/include 
<br>
-I../../../orte/include -I../../../ompi/include -I../../../ompi/include  
<br>
-DOMPI_CONFIGURE_USER=&quot;\&quot;root\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;cseppc01\&quot;&quot; 
<br>
-DOMPI_CONFIGURE_DATE=&quot;\&quot;Tue Feb 20 18:46:58 GMT 2007\&quot;&quot; 
<br>
-DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; 
<br>
-DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-DNDEBUG -O3 \&quot;&quot; 
<br>
-DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.1.4 -I../../.. 
<br>
-I../../../../openmpi-1.1.4/opal/include 
<br>
-I../../../../openmpi-1.1.4/orte/include 
<br>
-I../../../../openmpi-1.1.4/ompi/include  \&quot;&quot; 
<br>
-DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O -DNDEBUG  \&quot;&quot; 
<br>
-DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.1.4 -I../../.. 
<br>
-I../../../../openmpi-1.1.4/opal/include 
<br>
-I../../../../openmpi-1.1.4/orte/include 
<br>
-I../../../../openmpi-1.1.4/ompi/include  \&quot;&quot; 
<br>
-DOMPI_BUILD_FFLAGS=&quot;\&quot;-O3\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;-O3\&quot;&quot; 
<br>
-DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic -O3 \&quot;&quot; 
<br>
-DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  \&quot;&quot; 
<br>
-DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/local/bin/xlc_64\&quot;&quot; 
<br>
-DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/local/bin/xlC_64\&quot;&quot; 
<br>
-DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/local/bin/xlf_64\&quot;&quot; 
<br>
-DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/bin/gfortran\&quot;&quot; 
<br>
-DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../../../openmpi-1.1.4 -I../../.. 
<br>
-I../../../../openmpi-1.1.4/opal/include 
<br>
-I../../../../openmpi-1.1.4/orte/include 
<br>
-I../../../../openmpi-1.1.4/ompi/include    -O -DNDEBUG -c -o 
<br>
ompi_info.o ../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc
<br>
xlC: 1501-228 input file Feb not found
<br>
xlC: 1501-228 input file 20 not found
<br>
xlC: 1501-228 input file 18:46:58 not found
<br>
xlC: 1501-228 input file GMT not found
<br>
xlC: 1501-228 input file 2007&quot; not found
<br>
xlC: 1501-228 input file Feb not found
<br>
xlC: 1501-228 input file 20 not found
<br>
xlC: 1501-228 input file 19:01:05 not found
<br>
xlC: 1501-228 input file GMT not found
<br>
xlC: 1501-228 input file 2007&quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file Feb not found
<br>
xlC: 1501-228 input file 20 not found
<br>
xlC: 1501-228 input file 18:46:58 not found
<br>
xlC: 1501-228 input file GMT not found
<br>
xlC: 1501-228 input file 2007&quot; not found
<br>
xlC: 1501-228 input file Feb not found
<br>
xlC: 1501-228 input file 20 not found
<br>
xlC: 1501-228 input file 19:01:05 not found
<br>
xlC: 1501-228 input file GMT not found
<br>
xlC: 1501-228 input file 2007&quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
xlC: 1501-228 input file &quot; not found
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.21: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.23: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.24: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.25: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.28: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.36: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.49: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line 
<br>
1.52: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.21: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.23: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.24: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.25: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.28: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.36: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.49: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
&quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;, line 
<br>
1.52: 1540-0866 (W) A string literal must end before the end of the 
<br>
source line.
<br>
make[2]: *** [ompi_info.o] Error 252
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[2]: *** [components.o] Error 252
<br>
make[2]: Leaving directory 
<br>
`/root/ocf/software/openmpi-ofed-xl/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/root/ocf/software/openmpi-ofed-xl/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><pre>
-- 
regards,
Arif Ali
Software Engineer
OCF plc
Mobile: +44 (0)7970 148 122
Office: +44 (0)114 257 2200
Fax:    +44 (0)114 257 0022
Email:  aali_at_[hidden]
Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
Skype:  arif_ali80
MSN:    aali_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2719.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
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
