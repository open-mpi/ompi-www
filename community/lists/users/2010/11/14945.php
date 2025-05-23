<?
$subject_val = "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 06:40:57 2010" -->
<!-- isoreceived="20101130114057" -->
<!-- sent="Tue, 30 Nov 2010 06:40:49 -0500" -->
<!-- isosent="20101130114049" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express" -->
<!-- id="4CF4E2C1.9090000_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF4E0A5.5000706_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 06:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14946.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14944.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14944.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14950.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A slight note for the below there should be a space between &quot;ld&quot; and the 
<br>
ending single quote mark so it should be '-Qoption ld ' not '-Qoption ld'
<br>
<p>--td
<br>
On 11/30/2010 06:31 AM, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Actually there is a way to modify the configure file that will not 
</span><br>
<span class="quotelev1">&gt; require the autogen.sh to be ran.
</span><br>
<span class="quotelev1">&gt; If you go into configure and search for &quot;Sun F&quot; a few lines down will 
</span><br>
<span class="quotelev1">&gt; be one of three assignments:
</span><br>
<span class="quotelev1">&gt; lt_prog_compiler_wl
</span><br>
<span class="quotelev1">&gt; lt_prog_compiler_wl_F77
</span><br>
<span class="quotelev1">&gt; lt_prog_compiler_wl_FC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you change them all to '-Qoption ld' and then do the configure 
</span><br>
<span class="quotelev1">&gt; things should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/30/2010 06:19 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 11/29/2010 05:41 PM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI: its openmpi-1.4.2 from a tarball like you assume
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I changed this line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  *Sun\ F* | *Sun*Fortran*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           # Sun Fortran 8.3 passes all unrecognized flags to the linker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           _LT_TAGVAR(lt_prog_compiler_pic, $1)='-KPIC'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           _LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           _LT_TAGVAR(lt_prog_compiler_wl, $1)='-Qoption ld '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  unfortunately my autoconf tool is out of date (2.59 , it says it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wants 2.60+ )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The build page (<a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>) show's the 
</span><br>
<span class="quotelev2">&gt;&gt; versions of the tools you need to build OMPI.  Sorry, unfortunately 
</span><br>
<span class="quotelev2">&gt;&gt; in order for this workaround to work you need to re-autogen.sh no way 
</span><br>
<span class="quotelev2">&gt;&gt; around that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Nov 29, 2010 at 4:11 PM, Rolf vandeVaart 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;rolf.vandevaart_at_[hidden] &lt;mailto:rolf.vandevaart_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     No, I do not believe so.  First, I assume you are trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     build either 1.4 or 1.5, not the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Secondly, I assume you are building from a tarfile that you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     downloaded.  Assuming these
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     two things are true, then (as stated in the bug report), prior
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to running configure, you want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     make the following edits to config/libtool.m4 in all the places
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     you see it. ( I think just one place)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     FROM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              *Sun\ F*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                # Sun Fortran 8.3 passes all unrecognized flags to the linker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _LT_TAGVAR(lt_prog_compiler_pic, $1)='-KPIC'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _LT_TAGVAR(lt_prog_compiler_wl, $1)=''
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                ;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     TO:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              *Sun\ F*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                # Sun Fortran 8.3 passes all unrecognized flags to the linker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _LT_TAGVAR(lt_prog_compiler_pic, $1)='-KPIC'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                _LT_TAGVAR(lt_prog_compiler_wl, $1)='-Qoption ld '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                ;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Note the difference in the lt_prog_compiler_wl line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran ./configure anyway, but I don't think it did anything
</span><br>
<span class="quotelev2">&gt;&gt; It didn't, the change to libtool.m4 only affects the build system 
</span><br>
<span class="quotelev2">&gt;&gt; when you do an autogen.sh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Then, you need to run ./autogen.sh.  Then, redo your configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     but you do not need to do anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     with LDFLAGS.  Just use your original flags.  I think this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     should work, but I am only reading
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     what is in the ticket.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 11/29/10 16:26, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     that looks about right. So the suggestion:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ./configure LDFLAGS=&quot;-notpath ... ... ...&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     -notpath should be replaced by whatever the proper flag should be, in my case -L&lt;path&gt;  ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     On Mon, Nov 29, 2010 at 3:16 PM, Rolf vandeVaart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     &lt;mailto:rolf.vandevaart_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         This problem looks a lot like a thread from earlier today. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Can you look at this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ticket and see if it helps?  It has a workaround documented
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         in it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="https://svn.open-mpi.org/trac/ompi/ticket/2632">https://svn.open-mpi.org/trac/ompi/ticket/2632</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         On 11/29/10 16:13, Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         No, it looks like ld is being called with the option -path, and your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         linker doesn't use that switch. Grep you Makefile(s) for the string
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         &quot;-path&quot;. It's probably in a statement defining LDFLAGS somewhere.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         When you find it, replace it with the equivalent switch for your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         compiler. You may be able to override it's value on the configure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         command-line, which is usually easiest/best:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         ./configure LDFLAGS=&quot;-notpath ... ... ...&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Prentice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         Nehemiah Dacres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         it may have been that  I didn't set ld_library_path
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         On Mon, Nov 29, 2010 at 2:36 PM, Nehemiah Dacres&lt;dacresni_at_[hidden]  &lt;mailto:dacresni_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         &lt;mailto:dacresni_at_[hidden]&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              thank you, you have been doubly helpful, but I am having linking
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              errors and I do not know what the solaris studio compiler's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              preferred linker is. The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              the configure statement was
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              ./configure --prefix=/state/partition1/apps/sunmpi/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              --enable-mpi-threads --with-sge --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              --enable-sparse-groups CC=/opt/oracle/solstudio12.2/bin/suncc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              CXX=/opt/oracle/solstudio12.2/bin/sunCC
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              F77=/opt/oracle/solstudio12.2/bin/sunf77
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              FC=/opt/oracle/solstudio12.2/bin/sunf90
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 compile statement was
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              make all install 2&gt;errors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  error below is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              otherwise
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              otherwise
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              otherwise
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              otherwise
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              f90: Warning: Option -soname passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              otherwise
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              /usr/bin/ld: unrecognized option '-path'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              make[4]: *** [libmpi_f90.la  &lt;<a href="http://libmpi_f90.la">http://libmpi_f90.la</a>&gt;  &lt;<a href="http://libmpi_f90.la">http://libmpi_f90.la</a>&gt;] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              am I doing this wrong? are any of those configure flags unnecessary
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              or inappropriate
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              On Mon, Nov 29, 2010 at 2:06 PM, Gus Correa&lt;gus_at_[hidden]  &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              &lt;mailto:gus_at_[hidden]&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  Nehemiah Dacres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      I want to compile openmpi to work with the solaris studio
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      express  or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      solaris studio. This is a different version than is installed on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      rockscluster 5.2  and would like to know if there any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      gotchas or configure
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      flags I should use to get it working or portable to nodes on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      the cluster.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      Software-wise,  it is a fairly homogeneous environment with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      only slight
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      variations on the hardware side which could be isolated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      (machinefile flag
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      and what-not)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      Please advise
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  Hi Nehemiah
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  I just answered your email to the OpenMPI list.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  I want to add that if you build OpenMPI with Torque support,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  the machine file for each is not needed, it is provided by Torque.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  I believe the same is true for SGE (but I don't use SGE).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                  Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              Nehemiah I. Dacres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              System Administrator
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Nehemiah I. Dacres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         System Administrator
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Nehemiah I. Dacres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     System Administrator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Oracle
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14945/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14945/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14945/03-part" alt="picture">
<!-- attachment="03-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14945/04-part" alt="picture">
<!-- attachment="04-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14946.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14944.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14944.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14950.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
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
