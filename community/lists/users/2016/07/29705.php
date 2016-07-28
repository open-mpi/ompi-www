<?
$subject_val = "Re: [OMPI users] ompi_info -c does not print configure arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 04:50:26 2016" -->
<!-- isoreceived="20160725085026" -->
<!-- sent="Mon, 25 Jul 2016 17:50:19 +0900" -->
<!-- isosent="20160725085019" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info -c does not print configure arguments" -->
<!-- id="fe0660a5-eded-b0e1-e49d-32969df74f3f_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5tDxEx3RLDr3mQ3F-5eT_Tz4RZ5JGMSORgfr-iXgSDnNw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi_info -c does not print configure arguments<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 04:50:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>In reply to:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p><p>i made <a href="https://github.com/open-mpi/ompi/pull/1898">https://github.com/open-mpi/ompi/pull/1898</a> in order to add this 
<br>
feature
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/24/2016 10:13 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; currently there is no way to retrieve the configure command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I previously discussed this with Jeff S. and it seems autotools do not 
</span><br>
<span class="quotelev1">&gt; provide a reliable way to retrieve the configure command line.
</span><br>
<span class="quotelev1">&gt; I will have a look at how mpich is doing it, and try to mimick that in 
</span><br>
<span class="quotelev1">&gt; ompi.
</span><br>
<span class="quotelev1">&gt; if there is a consensus an approximation of the configure command line 
</span><br>
<span class="quotelev1">&gt; is better than nothing, then I will push the changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, July 24, 2016, Jeff Hammond &lt;jeff.science_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ompi_info -h indicates that -c shows configuration options, ie
</span><br>
<span class="quotelev1">&gt;     configure arguments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $
</span><br>
<span class="quotelev1">&gt;     /home/projects/x86-64-knl/openmpi/1.10.2/intel/17.0.042/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;     -h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The ompi_info command can be used to provide detailed information on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     your Open MPI installation.  Syntax:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -a|--all                 Show all configuration options and MCA
</span><br>
<span class="quotelev1">&gt;     parameters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        --arch                Show architecture Open MPI was compiled on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -c|--config              Show configuration options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So I expect something like what mpichversion gives me, which I
</span><br>
<span class="quotelev1">&gt;     find incredibly useful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $ ~/MPICH/install-ch3-ofi-psm2/bin/mpichversion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH Version: 3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH Release date:unreleased development copy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH Device: ch3:nemesis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH configure: CC=icc CXX=icpc FC=ifort F77=ifort
</span><br>
<span class="quotelev1">&gt;     --with-ofi=~/OFI/install-psm2 --with-device=ch3:nemesis:ofi
</span><br>
<span class="quotelev1">&gt;     --prefix=~/MPICH/install-ch3-ofi-psm2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH CC: icc    -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH CXX: icpc   -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH F77: ifort   -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH FC: ifort   -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Unfortunately, I see nothing that is directly convertible to
</span><br>
<span class="quotelev1">&gt;     configure arguments in the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     $
</span><br>
<span class="quotelev1">&gt;     /home/projects/x86-64-knl/openmpi/1.10.2/intel/17.0.042/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;     -c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Configured by: XXX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Configured on: Mon Apr 18 18:47:25 EDT 2016
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Configure host: XXX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Built by: XXX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Built on: Mon Apr 18 19:16:55 EDT 2016
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Built host: XXX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   C bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Fort mpif.h: yes (all)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort use mpi_f08: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Fort mpi_f08 compliance: The mpi_f08 module is available, but due to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               limitations in the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               compiler, does not support the
</span><br>
<span class="quotelev1">&gt;     following: array
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               subsections, direct passthru (where
</span><br>
<span class="quotelev1">&gt;     possible) to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               underlying Open MPI's C functionality
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Java bindings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   C compiler:
</span><br>
<span class="quotelev1">&gt;     /home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          C compiler absolute:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       C compiler family name: INTEL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           C compiler version: 1700.20160315
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  C char size: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  C bool size: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 C short size: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   C int size: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  C long size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 C float size: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                C double size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               C pointer size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 C char align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 C bool align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  C int align: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                C float align: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               C double align: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 C++ compiler:
</span><br>
<span class="quotelev1">&gt;     /home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        C++ compiler absolute: none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Fort compiler:
</span><br>
<span class="quotelev1">&gt;     /home/projects/x86-64-knl/intel/compilers/2017-beta/compilers_and_libraries_2017.0.042/linux/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort compiler abs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort ignore TKR: yes (!DEC$ ATTRIBUTES NO_ARG_CHECK ::)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort 08 assumed shape: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort optional args: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Fort INTERFACE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Fort ISO_FORTRAN_ENV: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort STORAGE_SIZE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort BIND(C) (all): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Fort PRIVATE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Fort PROTECTED: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Fort ABSTRACT: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Fort PROCEDURE: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort USE...ONLY: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Fort C_FUNLOC: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Fort f08 using wrappers: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort MPI_SIZEOF: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Fort logical value true: -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort have real16: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort have complex32: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Fort real size: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort dbl prec size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Fort cplx size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort dbl cplx size: 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort cplx32 size: 32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Fort integer align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort integer2 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort integer4 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort integer8 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort real align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort real4 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort real8 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort real16 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort dbl prec align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Fort cplx align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Fort dbl cplx align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Fort cplx8 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort cplx16 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Fort cplx32 align: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  C profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort mpif.h profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Fort use mpi profiling: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Thread support: posix (MPI_THREAD_MULTIPLE: yes, OPAL
</span><br>
<span class="quotelev1">&gt;     support: yes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               OMPI progress: no, ORTE progress: yes,
</span><br>
<span class="quotelev1">&gt;     Event lib:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               yes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Build CFLAGS: -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                               -fno-strict-aliasing -restrict
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -Qoption,cpp,--extended_float_types -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Build FCFLAGS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Build LDFLAGS: -L/home/projects/x86-64-knl/hwloc/1.11.3/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Build LIBS: -lrt -lutil   -lhwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Wrapper extra CXXFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Wrapper extra LDFLAGS: -Wl,-rpath -Wl,@{libdir}
</span><br>
<span class="quotelev1">&gt;     -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Wrapper extra LIBS: -ldl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Internal debug support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI interface warnings: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   dl support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Host topology support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               MPI extensions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        C/R Enabled Debugging: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     How do I extract configure arguments from an OpenMPI
</span><br>
<span class="quotelev1">&gt;     installation?  I am trying to reproduce a build exactly and I do
</span><br>
<span class="quotelev1">&gt;     not have access to config.log from the origin build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Jeff Hammond
</span><br>
<span class="quotelev1">&gt;     jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29704.php">http://www.open-mpi.org/community/lists/users/2016/07/29704.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29706.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
<li><strong>In reply to:</strong> <a href="29704.php">Gilles Gouaillardet: "Re: [OMPI users] ompi_info -c does not print configure arguments"</a>
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
