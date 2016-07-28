<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 20 14:55:36 2007" -->
<!-- isoreceived="20070220195536" -->
<!-- sent="Tue, 20 Feb 2007 14:55:33 -0500" -->
<!-- isosent="20070220195533" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IBM XL compilers[Scanned]" -->
<!-- id="6A17B3EC-3335-4BB1-92DB-885B58E894AA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45DB49FB.4000508_at_ocf.co.uk" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-20 14:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is strange. I just ran the exact command you gave, and it worked  
<br>
just fine. However, I do notice one potential, unrelated problem. You  
<br>
set $F90, but $F90 is not used. The variable you want is $FC.  
<br>
Similarly CCFLAGS should be CXXFLAGS. Also, I don't believe any of  
<br>
the *LINKER variables have any impact. See the end of the output  
<br>
from ./configure --help for all the environment variables.
<br>
<p>My suggestion would be to remove the build tree, and start over  
<br>
again. It is possible that there is something laying around that is  
<br>
screwing up the build.
<br>
<p>Tim
<br>
<p>On Feb 20, 2007, at 2:20 PM, Arif Ali wrote:
<br>
<p><span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Arif,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a problem with libtool and the IBM compilers and shared  
</span><br>
<span class="quotelev2">&gt;&gt; libraries. The easiest thing to do is to build static libraries  
</span><br>
<span class="quotelev2">&gt;&gt; instead by passing &quot;--disable-shared --enable-static&quot; to configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am currently unaware of any workarounds to make compiling shared  
</span><br>
<span class="quotelev2">&gt;&gt; libraries work with the IBM compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok, overcoming that, it fails with many errors, with 1.2b3/4, i'll  
</span><br>
<span class="quotelev1">&gt; post the details later
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with 1.1.4 I get a lot further and can't get past the following  
</span><br>
<span class="quotelev1">&gt; statemement, any ideas? I have tried deleting the backslashes (\),  
</span><br>
<span class="quotelev1">&gt; I have tried (\) before all the spaces, but still no luck. I have  
</span><br>
<span class="quotelev1">&gt; also tried taking the two variables for the date out, and still  
</span><br>
<span class="quotelev1">&gt; get  &quot; input file &quot; not found&quot;. after taking all the escape  
</span><br>
<span class="quotelev1">&gt; characters out \&quot; it works. Any way to avoid this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xlC_64 -DHAVE_CONFIG_H -I. -I../../../../openmpi-1.1.4/ompi/tools/ 
</span><br>
<span class="quotelev1">&gt; ompi_info -I../../../opal/include -I../../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../../ompi/include -I../../../ompi/include  - 
</span><br>
<span class="quotelev1">&gt; DOMPI_CONFIGURE_USER=&quot;\&quot;root\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;cseppc01 
</span><br>
<span class="quotelev1">&gt; \&quot;&quot; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Tue Feb 20 18:46:58 GMT 2007\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-DNDEBUG -O3  
</span><br>
<span class="quotelev1">&gt; \&quot;&quot; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.1.4 -I../../..  
</span><br>
<span class="quotelev1">&gt; -I../../../../openmpi-1.1.4/opal/include -I../../../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.4/orte/include -I../../../../openmpi-1.1.4/ompi/ 
</span><br>
<span class="quotelev1">&gt; include  \&quot;&quot; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O -DNDEBUG  \&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.1.4 -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../openmpi-1.1.4/opal/include -I../../../../openmpi-1.1.4/ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../../openmpi-1.1.4/ompi/include  \&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_FFLAGS=&quot;\&quot;-O3\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;-O3\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic -O3 \&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  \&quot;&quot; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/ 
</span><br>
<span class="quotelev1">&gt; local/bin/xlc_64\&quot;&quot; -DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/local/bin/xlC_64\&quot;&quot;  
</span><br>
<span class="quotelev1">&gt; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/local/bin/xlf_64\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/bin/gfortran\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../../../openmpi-1.1.4 - 
</span><br>
<span class="quotelev1">&gt; I../../.. -I../../../../openmpi-1.1.4/opal/include -I../../../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.4/orte/include -I../../../../openmpi-1.1.4/ompi/ 
</span><br>
<span class="quotelev1">&gt; include    -O -DNDEBUG -c -o ompi_info.o ../../../../openmpi-1.1.4/ 
</span><br>
<span class="quotelev1">&gt; ompi/tools/ompi_info/ompi_info.cc
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file Feb not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 20 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 18:46:58 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file GMT not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 2007&quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file Feb not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 20 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 19:01:05 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file GMT not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 2007&quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file Feb not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 20 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 18:46:58 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file GMT not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 2007&quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file Feb not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 20 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 19:01:05 not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file GMT not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file 2007&quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; xlC: 1501-228 input file &quot; not found
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.21: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.23: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.24: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.25: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.28: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.36: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.49: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/ompi_info.cc&quot;, line  
</span><br>
<span class="quotelev1">&gt; 1.52: 1540-0866 (W) A string literal must end before the end of the  
</span><br>
<span class="quotelev1">&gt; source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.21: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.23: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.24: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.25: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.28: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.36: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.49: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.1.4/ompi/tools/ompi_info/components.cc&quot;,  
</span><br>
<span class="quotelev1">&gt; line 1.52: 1540-0866 (W) A string literal must end before the end  
</span><br>
<span class="quotelev1">&gt; of the source line.
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ompi_info.o] Error 252
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[2]: *** [components.o] Error 252
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/root/ocf/software/openmpi-ofed-xl/ompi/ 
</span><br>
<span class="quotelev1">&gt; tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/root/ocf/software/openmpi-ofed-xl/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Arif Ali
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; OCF plc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mobile: +44 (0)7970 148 122
</span><br>
<span class="quotelev1">&gt; Office: +44 (0)114 257 2200
</span><br>
<span class="quotelev1">&gt; Fax:    +44 (0)114 257 0022
</span><br>
<span class="quotelev1">&gt; Email:  aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Web:    <a href="http://www.ocf.co.uk">http://www.ocf.co.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Skype:  arif_ali80
</span><br>
<span class="quotelev1">&gt; MSN:    aali_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;aali.vcf&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2722.php">Eric Thibodeau: "[OMPI users] Compiling HPCC with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2720.php">Arif Ali: "Re: [OMPI users] IBM XL compilers[Scanned]"</a>
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
