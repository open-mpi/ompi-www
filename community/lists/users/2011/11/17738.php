<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  9 13:11:47 2011" -->
<!-- isoreceived="20111109181147" -->
<!-- sent="Wed, 9 Nov 2011 13:11:42 -0500" -->
<!-- isosent="20111109181142" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers" -->
<!-- id="FF346E95-04EE-43E0-8584-73CF374CA282_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="65529870-67E9-40AD-AF05-D5E9BBF35990_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-09 13:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17739.php">Brock Palen: "[OMPI users] numactl with torque cpusets"</a>
<li><strong>Previous message:</strong> <a href="17737.php">S&#233;bastien Boisvert: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17730.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17729.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Thank you for your suggestion!
<br>
You're right.
<br>
It works with '-tp=shanghai-64', which is great.
<br>
A snippet of the make log where I had errors before is included below,
<br>
the crucial line being:
<br>
<p>libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc  -tp=shanghai-64   -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
<br>
<p>Somehow the OMPI 1.4.4 parses correctly the syntax with the equal sign,
<br>
but leaves it at '-tp' only if there is no equal sign.
<br>
If I understood right the patch you mentioned, the intent was to allow both syntaxes.
<br>
<p>FYI, I just checked the man pages of various PGI compiler releases,
<br>
and they seem to have changed the syntax from '-tp target_processor' 
<br>
to '-tp=target_processor' in release 11.  Up to release 10 the syntax was the
<br>
former, although release 11 seems to accept both syntaxes.
<br>
<p>So, if one is not using the latest syntax and the latest PGI version,
<br>
one is out of luck with OpenMPI 1.4.4, or must not use the '-tp target_processor' flag, right?
<br>
Could the patch be patched to make the parsing a bit more forgiving? 
<br>
[Maybe I am asking for too much, since 1.4.4 is probably the final release of the 1.4 series.]
<br>
<p>Many thanks for your help.
<br>
Gus Correa
<br>
<p>#################################
<br>
make[2]: Entering directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal/mca/memory/ptmalloc2'
<br>
source='../../../../../opal/mca/memory/ptmalloc2/dummy.c' object='dummy.lo' libtool=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPDIR=.deps depmode=none /bin/sh ../../../../../config/depcomp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=compile pgcc -DHAVE_CONFIG_H -I. -I../../../../../opal/mca/memory/ptmalloc2 -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa  -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/pthread  -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/generic -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include  -D_REENTRANT  -DNDEBUG -tp=shanghai-64 -fast -Mfprelaxed  -c -o dummy.lo ../../../../../opal/mca/memory/ptmalloc2/dummy.c
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../../opal/mca/memory/ptmalloc2 -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/pthread -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/generic -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include -D_REENTRANT -DNDEBUG -tp=shanghai-64 -fast -Mfprelaxed -c ../../../../../opal/mca/memory/ptmalloc2/dummy.c  -fpic -DPIC -o .libs/dummy.o
<br>
libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../../opal/mca/memory/ptmalloc2 -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/pthread -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/generic -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include -D_REENTRANT -DNDEBUG -tp=shanghai-64 -fast -Mfprelaxed -c ../../../../../opal/mca/memory/ptmalloc2/dummy.c -o dummy.o &gt;/dev/null 2&gt;&amp;1
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=link pgcc  -DNDEBUG -tp=shanghai-64 -fast -Mfprelaxed   -export-dynamic   -o libopenmpi_malloc.la -rpath /home/sw/openmpi/1.4.4/pgi-11.7/lib dummy.lo  -lnsl -lutil  
<br>
libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc  -tp=shanghai-64   -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libopenmpi_malloc.so.0&quot; &amp;&amp; ln -s &quot;libopenmpi_malloc.so.0.0.0&quot; &quot;libopenmpi_malloc.so.0&quot;)
<br>
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libopenmpi_malloc.so&quot; &amp;&amp; ln -s &quot;libopenmpi_malloc.so.0.0.0&quot; &quot;libopenmpi_malloc.so&quot;)
<br>
libtool: link: ar cru .libs/libopenmpi_malloc.a  dummy.o
<br>
libtool: link: ranlib .libs/libopenmpi_malloc.a
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libopenmpi_malloc.la&quot; &amp;&amp; ln -s &quot;../libopenmpi_malloc.la&quot; &quot;libopenmpi_malloc.la&quot; )
<br>
<p>#################################
<br>
<p><p>On Nov 8, 2011, at 8:57 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It looks like we added a patch to the libtool bootstrap in the 1.4.4 tarball (because we're using a quite old version of Libtool to build that tarball) in r24224:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/24224">https://svn.open-mpi.org/trac/ompi/changeset/24224</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was to close CMR <a href="https://svn.open-mpi.org/trac/ompi/ticket/2670">https://svn.open-mpi.org/trac/ompi/ticket/2670</a>, which was the port to v1.4 from the original Trac ticket <a href="https://svn.open-mpi.org/trac/ompi/ticket/2586">https://svn.open-mpi.org/trac/ompi/ticket/2586</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It *looks* like this patch is supposed to allow -tp &lt;foo&gt; to pass through Libtool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Libtool sh here is quite complex; I'm not sure I'm reading it right.  Can you try -tp=shanghai-64 instead of &quot;-tp shanghai-64&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2011, at 5:14 PM, Gustavo Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Samuel
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was hoping not to have to change my Gnu auto tools in the cluster.
</span><br>
<span class="quotelev2">&gt;&gt; I remain a bit skeptical that libtool is the main culprit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Somehow OpenMPI 1.4.3 builds fine in the very same computer
</span><br>
<span class="quotelev2">&gt;&gt; with the same libtool, same PGI 11.7, same compiler flags.
</span><br>
<span class="quotelev2">&gt;&gt; In the OMPI 1.4.3 make log there are several lines with 'libtool: link: pgcc' followed 
</span><br>
<span class="quotelev2">&gt;&gt; by all compiler flags.
</span><br>
<span class="quotelev2">&gt;&gt; In addition, the specific line that links libopenmpi_malloc.so, 
</span><br>
<span class="quotelev2">&gt;&gt; correctly strips off *all* compiler flags, it doesn't leave the '-tp' behind,
</span><br>
<span class="quotelev2">&gt;&gt; hence pgcc can do its job.
</span><br>
<span class="quotelev2">&gt;&gt; I would guess this is the right thing to do, no funny optimization flags chosen by 
</span><br>
<span class="quotelev2">&gt;&gt; the user in a malloc library. 
</span><br>
<span class="quotelev2">&gt;&gt; Here it is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc    -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, the same setup doesn't work with OMPI 1.4.4.
</span><br>
<span class="quotelev2">&gt;&gt; That particular line in the make log is [note the added '-tp']:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc  -tp   -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, I am more inclined to think that there was a change from  the 1.4.3 to  
</span><br>
<span class="quotelev2">&gt;&gt; the 1.4.4 configure script, that somehow forgot how to handle the PGI quirks, 
</span><br>
<span class="quotelev2">&gt;&gt; and is no longer stripping correctly  the user CFLAGS when it links the 
</span><br>
<span class="quotelev2">&gt;&gt; libopenmpi_malloc.so library.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can send the gzipped configure and make logs of 1.4.3 and 1.4.4 if that helps.
</span><br>
<span class="quotelev2">&gt;&gt; I didn't do it so as not to bother the list with bulky files.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2011, at 4:24 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I've seen this before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't speak to the details surrounding this issue, but when I upgraded to the newest version of libtool, the problem went away &lt;shrug&gt;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Take a look at &quot;Use of GNU m4, Autoconf, Automake, and Libtool&quot; in our HACKING file.  libtool-2.4.2.tar.gz **should** work, if that's the problem that you are experiencing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would suggest starting with a fresh source tree, before you try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope that helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 8, 2011, at 2:06 PM, Gustavo Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear OpenMPI pros
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I try to build OpenMPI 1.4.4 with PGI compilers 11.7 [pgcc, pgcc, pgfortran]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the awkward error message on the bottom of this email.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I say awkward because I assigned the value 'shanghai-64' to the '-tp' flag,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as you can see from the successful 'libtool:compile' command in the error message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, the subsequent 'libtool:link' command has '-tp' without a value.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that the remaining flags '-fast -Mfprelaxed' were also dropped in the libtool:link command. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The 'partial' flag '-tp' is worse than no flag at all, and the pgcc compiler fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By contrast, OpenMPI 1.4.3 builds just fine with  the same compilers and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same compiler flags.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this the revival of an old idiosyncrasy between libtool and PGI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could perhaps the OMPI 1.4.4. configure script have stripped off my compiler flags after '-tp',
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when passing it to libtool in link mode? [Somehow it works in 1.4.3.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there any workaround or patch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ******
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; More details:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CentOS Linux 5.2 x86_64, libtool 1.5.22, PGI 11.7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configure parameters:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export CC=pgcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export CXX=pgcpp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export F77='pgfortran'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export FC=${F77}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export CFLAGS='-tp shanghai-64 -fast -Mfprelaxed'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export CXXFLAGS=${CFLAGS}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export FFLAGS=${CFLAGS}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export FCFLAGS=${FFLAGS}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../configure \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-tm=/opt/torque/2.4.11/gnu-4.1.2 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-openib=/usr \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-static \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2&gt;&amp;1 | tee configure_${build_id}.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ****
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #################### ERROR MESSAGE ###########################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../../opal/mca/memory/ptmalloc2 -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/pthread -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/generic -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include -D_REENTRANT -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed -c ../../../../../opal/mca/memory/ptmalloc2/dummy.c -o dummy.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../../../../libtool --tag=CC   --mode=link pgcc  -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed   -export-dynamic   -o libopenmpi_malloc.la -rpath /home/sw/openmpi/1.4.4/pgi-11.7/lib dummy.lo  -lnsl -lutil  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc  -tp   -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pgcc-Fatal-Switch -tp must have a value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -tp=amd64|amd64e|athlon|athlonxp|barcelona|barcelona-32|barcelona-64|core2|core2-32|core2-64|istanbul|istanbul-32|istanbul-64|k7|k8|k8-32|k8-64|k8-64e|nehalem|nehalem-32|nehalem-64|p5|p6|p7|p7-32|p7-64|penryn|penryn-32|penryn-64|piii|piv|px|px-32|px-64|sandybridge|sandybridge-32|sandybridge-64|shanghai|shanghai-32|shanghai-64|x64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Choose target processor type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; amd64           Same as -tp k8-64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; amd64e          Same as -tp k8-64e
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; athlon          AMD 32-bit Athlon Processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; athlonxp        AMD 32-bit Athlon XP Processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; barcelona       AMD Barcelona processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; barcelona-32    AMD Barcelona processor, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; barcelona-64    AMD Barcelona processor, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core2           Intel Core-2 Architecture
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core2-32        Intel Core-2 Architecture, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core2-64        Intel Core-2 Architecture, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; istanbul        AMD Istanbul processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; istanbul-32     AMD Istanbul processor, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; istanbul-64     AMD Istanbul processor, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; k7              AMD Athlon Processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; k8              AMD64 Processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; k8-32           AMD64 Processor 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; k8-64           AMD64 Processor 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; k8-64e          AMD64 Processor rev E or later, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nehalem         Intel Nehalem processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nehalem-32      Intel Nehalem processor, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nehalem-64      Intel Nehalem processor, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p5              Intel P5 Pentium Architecture
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p6              Intel P6 Architecture (Pentium Pro, II, III)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p7              Intel P7 Architecture (Pentium 4, Xeon, Centrino)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p7-32           Intel P7 Architecture (Pentium 4, Xeon, Centrino)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p7-64           Intel P7 Architecture with EM64T, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; penryn          Intel Penryn Architecture
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; penryn-32       Intel Penryn Architecture, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; penryn-64       Intel Penryn Architecture, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; piii            Intel Pentium III
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; piv             Intel Pentium 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; px              Generic x86 Processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; px-32           Generic x86 Processor, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; px-64           Generic x86-64 architecture
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sandybridge     Intel SandyBridge processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sandybridge-32  Intel SandyBridge processor, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sandybridge-64  Intel SandyBridge processor, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shanghai        AMD Shanghai processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shanghai-32     AMD Shanghai processor, 32-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shanghai-64     AMD Shanghai processor, 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x64             Unified AMD/Intel 64-bit mode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [libopenmpi_malloc.la] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal/mca/memory/ptmalloc2'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17739.php">Brock Palen: "[OMPI users] numactl with torque cpusets"</a>
<li><strong>Previous message:</strong> <a href="17737.php">S&#233;bastien Boisvert: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17730.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17729.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
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
