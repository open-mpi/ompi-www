<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 19:15:33 2007" -->
<!-- isoreceived="20070718231533" -->
<!-- sent="Thu, 19 Jul 2007 09:14:37 +1000" -->
<!-- isosent="20070718231437" -->
<!-- name="Tim Cornwell" -->
<!-- email="tim.cornwell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems running openmpi under os x" -->
<!-- id="0A26DB68-6620-4489-928A-B0D4BFAD6E1A_at_csiro.au" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DA6FDA15-5D8F-47E7-B5B7-D595BB54BD2F_at_csiro.au" -->
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
<strong>From:</strong> Tim Cornwell (<em>tim.cornwell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 19:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3659.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Reply:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>To close this one off, we found that one of our libraries has a  
<br>
malloc/free that was being called from ompi. I should have looked at  
<br>
the crash reporter. It reported
<br>
<p>Exception:  EXC_BAD_ACCESS (0x0001)
<br>
Codes:      KERN_INVALID_ADDRESS (0x0001) at 0x05801bfc
<br>
<p>Thread 0 Crashed:
<br>
0   libcasa_casa.dylib  	0x0107b319 free + 51
<br>
1   libopen-pal.0.dylib 	0x0289eff9 opal_install_dirs_expand + 467  
<br>
(installdirs_base_expand.c:68)
<br>
2   libopen-pal.0.dylib 	0x0289e5a0 opal_installdirs_base_open + 1115  
<br>
(installdirs_base_components.c:96)
<br>
3   libopen-pal.0.dylib 	0x0287ba40 opal_init_util + 217 (opal_init.c: 
<br>
150)
<br>
4   libopen-pal.0.dylib 	0x0287bb24 opal_init + 24 (opal_init.c:200)
<br>
5   libmpi.0.dylib      	0x01d745cd ompi_mpi_init + 33  
<br>
(ompi_mpi_init.c:219)
<br>
6   libmpi.0.dylib      	0x01db48db MPI_Init + 293 (init.c:71)
<br>
7   ctest               	0x00002f90 main + 24 (ctest.cc:4)
<br>
8   ctest               	0x00002906 _start + 216
<br>
9   ctest               	0x0000282d start + 41
<br>
<p>On looking into this more, we found that the Lea Malloc was used in  
<br>
the casa_casa library. Removing it cured the problem.
<br>
<p>Thanks for the help,
<br>
<p>Tim
<br>
<p>On 12/07/2007, at 2:54 PM, Tim Cornwell wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it's just a symbol clash. A test program linked with just  
</span><br>
<span class="quotelev1">&gt; mpicxx works fine but with our typical link, it fails. I've  
</span><br>
<span class="quotelev1">&gt; narrowed the problem down to a single shared library. This is from C 
</span><br>
<span class="quotelev1">&gt; ++ and the symbols have a namespace casa. Weeding out all the the  
</span><br>
<span class="quotelev1">&gt; casa stuff and some other cruft, we're left with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0009df14 T QuantaProxy::fits()
</span><br>
<span class="quotelev1">&gt; 0011277c S int __gnu_cxx::__capture_isnan&lt;double&gt;(double)
</span><br>
<span class="quotelev1">&gt; 0014b4ae S std::invalid_argument::~invalid_argument()
</span><br>
<span class="quotelev1">&gt; 0014b48e S std::invalid_argument::~invalid_argument()
</span><br>
<span class="quotelev1">&gt; 00112790 S int std::isnan&lt;double&gt;(double)
</span><br>
<span class="quotelev1">&gt; 001200e8 S void** std::fill_n&lt;void**, unsigned int, void*&gt;(void**,  
</span><br>
<span class="quotelev1">&gt; unsigned int, void* const&amp;)
</span><br>
<span class="quotelev1">&gt; 0012da12 S std::complex&lt;double&gt;* std::fill_n&lt;std::complex&lt;double&gt;*,  
</span><br>
<span class="quotelev1">&gt; unsigned int, std::complex&lt;double&gt; &gt;(std::complex&lt;double&gt;*,  
</span><br>
<span class="quotelev1">&gt; unsigned int, std::complex&lt;double&gt; const&amp;)
</span><br>
<span class="quotelev1">&gt; 0012d9ae S std::complex&lt;float&gt;* std::fill_n&lt;std::complex&lt;float&gt;*,  
</span><br>
<span class="quotelev1">&gt; unsigned int, std::complex&lt;float&gt; &gt;(std::complex&lt;float&gt;*, unsigned  
</span><br>
<span class="quotelev1">&gt; int, std::complex&lt;float&gt; const&amp;)
</span><br>
<span class="quotelev1">&gt; 00104a4c S bool* std::fill_n&lt;bool*, unsigned int, bool&gt;(bool*,  
</span><br>
<span class="quotelev1">&gt; unsigned int, bool const&amp;)
</span><br>
<span class="quotelev1">&gt; 0010b126 S double* std::fill_n&lt;double*, unsigned int, double&gt; 
</span><br>
<span class="quotelev1">&gt; (double*, unsigned int, double const&amp;)
</span><br>
<span class="quotelev1">&gt; 0012043a S float* std::fill_n&lt;float*, unsigned int, float&gt;(float*,  
</span><br>
<span class="quotelev1">&gt; unsigned int, float const&amp;)
</span><br>
<span class="quotelev1">&gt; 00120386 S int* std::fill_n&lt;int*, unsigned int, int&gt;(int*, unsigned  
</span><br>
<span class="quotelev1">&gt; int, int const&amp;)
</span><br>
<span class="quotelev1">&gt; 001203e0 S unsigned int* std::fill_n&lt;unsigned int*, unsigned int,  
</span><br>
<span class="quotelev1">&gt; unsigned int&gt;(unsigned int*, unsigned int, unsigned int const&amp;)
</span><br>
<span class="quotelev1">&gt; 00120322 S short* std::fill_n&lt;short*, unsigned int, short&gt;(short*,  
</span><br>
<span class="quotelev1">&gt; unsigned int, short const&amp;)
</span><br>
<span class="quotelev1">&gt; 0012d94a S unsigned short* std::fill_n&lt;unsigned short*, unsigned  
</span><br>
<span class="quotelev1">&gt; int, unsigned short&gt;(unsigned short*, unsigned int, unsigned short  
</span><br>
<span class="quotelev1">&gt; const&amp;)
</span><br>
<span class="quotelev1">&gt; 00112bf6 S void std::__reverse&lt;__gnu_cxx::__normal_iterator&lt;char*,  
</span><br>
<span class="quotelev1">&gt; std::basic_string&lt;char, std::char_traits&lt;char&gt;,  
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;char&gt; &gt; &gt; &gt;(__gnu_cxx::__normal_iterator&lt;char*,  
</span><br>
<span class="quotelev1">&gt; std::basic_string&lt;char, std::char_traits&lt;char&gt;,  
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;char&gt; &gt; &gt;, __gnu_cxx::__normal_iterator&lt;char*,  
</span><br>
<span class="quotelev1">&gt; std::basic_string&lt;char, std::char_traits&lt;char&gt;,  
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;char&gt; &gt; &gt;, std::random_access_iterator_tag)
</span><br>
<span class="quotelev1">&gt; 00112bbc S __gnu_cxx::__normal_iterator&lt;char*,  
</span><br>
<span class="quotelev1">&gt; std::basic_string&lt;char, std::char_traits&lt;char&gt;,  
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;char&gt; &gt; &gt;  
</span><br>
<span class="quotelev1">&gt; std::transform&lt;__gnu_cxx::__normal_iterator&lt;char*,  
</span><br>
<span class="quotelev1">&gt; std::basic_string&lt;char, std::char_traits&lt;char&gt;,  
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;char&gt; &gt; &gt;, __gnu_cxx::__normal_iterator&lt;char*,  
</span><br>
<span class="quotelev1">&gt; std::basic_string&lt;char, std::char_traits&lt;char&gt;,  
</span><br>
<span class="quotelev1">&gt; std::allocator&lt;char&gt; &gt; &gt;, int (*)(int)&gt; 
</span><br>
<span class="quotelev1">&gt; (__gnu_cxx::__normal_iterator&lt;char*, std::basic_string&lt;char,  
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt; &gt;,  
</span><br>
<span class="quotelev1">&gt; __gnu_cxx::__normal_iterator&lt;char*, std::basic_string&lt;char,  
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt; &gt;,  
</span><br>
<span class="quotelev1">&gt; __gnu_cxx::__normal_iterator&lt;char*, std::basic_string&lt;char,  
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt; &gt;, int (*)(int))
</span><br>
<span class="quotelev1">&gt; 00198740 S typeinfo for std::invalid_argument
</span><br>
<span class="quotelev1">&gt; 00192cac S typeinfo name for std::invalid_argument
</span><br>
<span class="quotelev1">&gt; 001993e0 S vtable for std::invalid_argument
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're all using the standard of OS X:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicxx -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i686-apple-darwin8
</span><br>
<span class="quotelev1">&gt; Configured with: /private/var/tmp/gcc/gcc-5367.obj~1/src/configure  
</span><br>
<span class="quotelev1">&gt; --disable-checking -enable-werror --prefix=/usr --mandir=/share/man  
</span><br>
<span class="quotelev1">&gt; --enable-languages=c,objc,c++,obj-c++ --program-transform-name=/^ 
</span><br>
<span class="quotelev1">&gt; [cg][^.-]*$/s/$/-4.0/ --with-gxx-include-dir=/include/c++/4.0.0 -- 
</span><br>
<span class="quotelev1">&gt; with-slibdir=/usr/lib --build=powerpc-apple-darwin8 --with- 
</span><br>
<span class="quotelev1">&gt; arch=nocona --with-tune=generic --program-prefix= --host=i686-apple- 
</span><br>
<span class="quotelev1">&gt; darwin8 --target=i686-apple-darwin8
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.0.1 (Apple Computer, Inc. build 5367)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/07/2007, at 7:57 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's unexpected.  If you run the command 'ompi_info --all', it
</span><br>
<span class="quotelev2">&gt;&gt; should list (towards the top) things like the Bindir and Libdir.  Can
</span><br>
<span class="quotelev2">&gt;&gt; you see if those have sane values?  If they do, can you try running a
</span><br>
<span class="quotelev2">&gt;&gt; simple hello, world type MPI application (there's one in the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; tarball).  It almost looks like memory is getting corrupted, which
</span><br>
<span class="quotelev2">&gt;&gt; would be very unexpected that early in the process.  I'm unable to
</span><br>
<span class="quotelev2">&gt;&gt; duplicate the problem with 1.2.3 on my Mac Pro, making it all the
</span><br>
<span class="quotelev2">&gt;&gt; more strange.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another random thought -- Which compilers did you use to build  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2007, at 1:27 PM, Tim Cornwell wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Open MPI: 1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Open MPI SVN revision: r15136
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  Open RTE: 1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Open RTE SVN revision: r15136
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      OPAL: 1.2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OPAL SVN revision: r15136
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Prefix: /usr/local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Configured architecture: i386-apple-darwin8.10.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.3 downloaded and built from source.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/07/2007, at 12:50 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which version of Open MPI are you using?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 11, 2007, at 3:32 AM, Tim Cornwell wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a problem running openmpi under OS 10.4.10. My program runs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fine under debian x86_64 on an opteron but under OS X on a number
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of Mac Book and Mac Book Pros, I get the following immediately on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; startup. This smells like a common problem but I could find
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything relevant anywhere. Can anyone provide a hint or better  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; yet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a solution?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Program received signal EXC_BAD_ACCESS, Could not access memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reason: KERN_PROTECTION_FAILURE at address: 0x0000000c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0x04510412 in free ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #0  0x04510412 in free ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #1  0x05d24f80 in opal_install_dirs_expand (input=0x5d2a6b0 &quot;$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {prefix}&quot;) at base/installdirs_base_expand.c:67
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #2  0x05d24584 in opal_installdirs_base_open () at base/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installdirs_base_components.c:94
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #3  0x05d01a40 in opal_init_util () at runtime/opal_init.c:150
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #4  0x05d01b24 in opal_init () at runtime/opal_init.c:200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #5  0x051fa5cd in ompi_mpi_init (argc=1, argv=0xbfffde74,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; requested=0, provided=0xbfffd930) at runtime/ompi_mpi_init.c:219
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #6  0x0523a8db in MPI_Init (argc=0xbfffd980, argv=0xbfffde14) at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; init.c:71
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #7  0x0005a03d in conrad::cp::MPIConnection::initMPI (argc=1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; argv=@0xbfffde14) at mwcommon/MPIConnection.cc:83
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #8  0x00004163 in main (argc=1, argv=0xbfffde74) at apps/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cimager.cc:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 155
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim Cornwell,  Australia Telescope National Facility, CSIRO
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Location: Cnr Pembroke &amp; Vimiera Rds, Marsfield, NSW, 2122,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; AUSTRALIA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Post:     PO Box 76, Epping, NSW 1710, AUSTRALIA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Phone:    +61 2 9372 4261   Fax:  +61 2 9372 4450 or 4310
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mobile:  +61 4 3366 5399
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email:    Tim.Cornwell_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL:      <a href="http://www.atnf.csiro.au/people/tim.cornwell">http://www.atnf.csiro.au/people/tim.cornwell</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3721.php">Dirk Eddelbuettel: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3659.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Reply:</strong> <a href="3724.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
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
