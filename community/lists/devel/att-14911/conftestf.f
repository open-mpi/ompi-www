      program falign
      external align
      REAL*8  w,x,y,z
      CHARACTER a,b,c
      common /foo/a,w,b,x,y,c,z
      call align(w,x,y,z)
      end

